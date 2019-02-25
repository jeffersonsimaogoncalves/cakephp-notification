<?php
use Migrations\AbstractMigration;

class CreateNotificationSubjects extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('notification_subjects');
        $table->addColumn('notification_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('model', 'string', [
            'default' => null,
            'limit' => 45,
            'null' => false,
        ]);
        $table->addColumn('model_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
