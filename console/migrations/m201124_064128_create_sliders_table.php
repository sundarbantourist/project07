<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sliders}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 * - `{{%user}}`
 */
class m201124_064128_create_sliders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sliders}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'description' => 'LONGTEXT',
            'image' => $this->string(2000),
            'status' => $this->tinyInteger(2)->notNull(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
            'updated_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-sliders-created_by}}',
            '{{%sliders}}',
            'created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-sliders-created_by}}',
            '{{%sliders}}',
            'created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        // creates index for column `updated_by`
        $this->createIndex(
            '{{%idx-sliders-updated_by}}',
            '{{%sliders}}',
            'updated_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-sliders-updated_by}}',
            '{{%sliders}}',
            'updated_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-sliders-created_by}}',
            '{{%sliders}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-sliders-created_by}}',
            '{{%sliders}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-sliders-updated_by}}',
            '{{%sliders}}'
        );

        // drops index for column `updated_by`
        $this->dropIndex(
            '{{%idx-sliders-updated_by}}',
            '{{%sliders}}'
        );

        $this->dropTable('{{%sliders}}');
    }
}
