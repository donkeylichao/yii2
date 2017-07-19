<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zqjj_sjmh".
 *
 * @property int $sjmh_id 主键id
 * @property int $user_id 用户id
 * @property string $real_name 真实姓名
 * @property string $identity_code 身份证号码(18或15位数字或末尾为X)
 * @property string $user_mobile 用户手机号
 * @property string $user_pass 服务密码
 * @property string $task_id 任务id
 * @property int $sjmh_status 状态（0-进行中，1-完成，2-超时，3-错误）
 * @property string $result_code 最后一次查询返回的状态码
 * @property string $result_msg 最近调用接口返回的message信息
 * @property string $report_code 任务报表返回的code值（0-成功，1-未知错误，1070-用户认证失败，4000-报告生成失败，4001-报告正在生成中，4002-报告数据缺失，4003-没有查询到报告）
 * @property string $report_msg 任务报表最后返回的信息
 * @property int $report_finish 表报是否爬取完成（0-未完成，1-已完成）
 * @property int $info_finish 报表详情是否爬取完成（0-未完成，1-完成）
 * @property string $result_json 最近调用接口返回信息
 * @property int $create_time 创建时间
 * @property int $update_time 更新时间
 */
class ZqjjSjmh extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zqjj_sjmh';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'sjmh_status', 'report_finish', 'info_finish', 'create_time', 'update_time'], 'integer'],
            [['result_json'], 'string'],
            [['real_name', 'user_pass', 'task_id'], 'string', 'max' => 50],
            [['identity_code'], 'string', 'max' => 20],
            [['user_mobile'], 'string', 'max' => 11],
            [['result_code', 'report_code'], 'string', 'max' => 10],
            [['result_msg', 'report_msg'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sjmh_id' => 'Sjmh ID',
            'user_id' => 'User ID',
            'real_name' => 'Real Name',
            'identity_code' => 'Identity Code',
            'user_mobile' => 'User Mobile',
            'user_pass' => 'User Pass',
            'task_id' => 'Task ID',
            'sjmh_status' => 'Sjmh Status',
            'result_code' => 'Result Code',
            'result_msg' => 'Result Msg',
            'report_code' => 'Report Code',
            'report_msg' => 'Report Msg',
            'report_finish' => 'Report Finish',
            'info_finish' => 'Info Finish',
            'result_json' => 'Result Json',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
