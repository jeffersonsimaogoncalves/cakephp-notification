<?php

use Migrations\AbstractMigration;

class CreateNotificationNotifications extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * @return void
     */
    public function change()
    {
        $table = $this->table('notification_notifications');
        $table->addColumn('user_id', 'uuid', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'limit'   => 45,
            'null'    => false,
        ]);
        $table->addColumn('read', 'boolean', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null'    => false,
        ]);
        $table->create();
    }
}
