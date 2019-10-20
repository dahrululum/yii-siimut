<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "simut_users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $daerah
 * @property string $kelompok
 * @property string $program
 * @property string $skpd
 * @property string $level
 * @property string $nama
 * @property string $nip
 * @property string $alamat
 * @property string $telp
 * @property string $hp
 * @property string $keterangan
 * @property string $foto
 * @property string $tupdate
 * @property string $status
 */
class SimutUsers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'simut_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username'], 'required'],
            [['tupdate'], 'safe'],
            [['username', 'password', 'nama', 'alamat', 'telp', 'hp', 'keterangan', 'foto'], 'string', 'max' => 50],
            [['daerah', 'kelompok', 'program', 'skpd'], 'string', 'max' => 10],
            [['level', 'status'], 'string', 'max' => 1],
            [['nip'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'daerah' => 'Daerah',
            'kelompok' => 'Kelompok',
            'program' => 'Program',
            'skpd' => 'Skpd',
            'level' => 'Level',
            'nama' => 'Nama',
            'nip' => 'Nip',
            'alamat' => 'Alamat',
            'telp' => 'Telp',
            'hp' => 'Hp',
            'keterangan' => 'Keterangan',
            'foto' => 'Foto',
            'tupdate' => 'Tupdate',
            'status' => 'Status',
        ];
    }
}
