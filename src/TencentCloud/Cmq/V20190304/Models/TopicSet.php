<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * topic返回信息展示字段
 *
 * @method integer getMsgCount() 获取当前该主题中消息数目（消息堆积数）。
 * @method void setMsgCount(integer $MsgCount) 设置当前该主题中消息数目（消息堆积数）。
 * @method string getTopicId() 获取主题的 ID。
 * @method void setTopicId(string $TopicId) 设置主题的 ID。
 * @method integer getMaxMsgSize() 获取消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为65536。
 * @method void setMaxMsgSize(integer $MaxMsgSize) 设置消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为65536。
 * @method boolean getTrace() 获取消息轨迹。true表示开启，false表示不开启。
 * @method void setTrace(boolean $Trace) 设置消息轨迹。true表示开启，false表示不开启。
 * @method array getTags() 获取关联的标签。
 * @method void setTags(array $Tags) 设置关联的标签。
 * @method integer getCreateUin() 获取创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
 * @method void setCreateUin(integer $CreateUin) 设置创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
 * @method integer getFilterType() 获取描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
 * @method void setFilterType(integer $FilterType) 设置描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method integer getLastModifyTime() 获取最后一次修改主题属性的时间。返回 Unix 时间戳，精确到秒。
 * @method void setLastModifyTime(integer $LastModifyTime) 设置最后一次修改主题属性的时间。返回 Unix 时间戳，精确到秒。
 * @method integer getMsgRetentionSeconds() 获取消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) 设置消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
 * @method integer getQps() 获取每秒钟发布消息的条数。
 * @method void setQps(integer $Qps) 设置每秒钟发布消息的条数。
 * @method integer getCreateTime() 获取主题的创建时间。返回 Unix 时间戳，精确到秒。
 * @method void setCreateTime(integer $CreateTime) 设置主题的创建时间。返回 Unix 时间戳，精确到秒。
 * @method integer getMigrate() 获取是否迁移到新版本。0 表示未迁移，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未知状态。
 * @method void setMigrate(integer $Migrate) 设置是否迁移到新版本。0 表示未迁移，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未知状态。
 */
class TopicSet extends AbstractModel
{
    /**
     * @var integer 当前该主题中消息数目（消息堆积数）。
     */
    public $MsgCount;

    /**
     * @var string 主题的 ID。
     */
    public $TopicId;

    /**
     * @var integer 消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为65536。
     */
    public $MaxMsgSize;

    /**
     * @var boolean 消息轨迹。true表示开启，false表示不开启。
     */
    public $Trace;

    /**
     * @var array 关联的标签。
     */
    public $Tags;

    /**
     * @var integer 创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
     */
    public $CreateUin;

    /**
     * @var integer 描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
     */
    public $FilterType;

    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var integer 最后一次修改主题属性的时间。返回 Unix 时间戳，精确到秒。
     */
    public $LastModifyTime;

    /**
     * @var integer 消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer 每秒钟发布消息的条数。
     */
    public $Qps;

    /**
     * @var integer 主题的创建时间。返回 Unix 时间戳，精确到秒。
     */
    public $CreateTime;

    /**
     * @var integer 是否迁移到新版本。0 表示未迁移，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未知状态。
     */
    public $Migrate;

    /**
     * @param integer $MsgCount 当前该主题中消息数目（消息堆积数）。
     * @param string $TopicId 主题的 ID。
     * @param integer $MaxMsgSize 消息最大长度。取值范围1024 - 1048576Byte（即1 - 1024K），默认值为65536。
     * @param boolean $Trace 消息轨迹。true表示开启，false表示不开启。
     * @param array $Tags 关联的标签。
     * @param integer $CreateUin 创建者 Uin，CAM 鉴权 resource 由该字段组合而成。
     * @param integer $FilterType 描述用户创建订阅时选择的过滤策略：
FilterType = 1表示用户使用 FilterTag 标签过滤;
FilterType = 2表示用户使用 BindingKey 过滤。
     * @param string $TopicName 主题名称。
     * @param integer $LastModifyTime 最后一次修改主题属性的时间。返回 Unix 时间戳，精确到秒。
     * @param integer $MsgRetentionSeconds 消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。固定为一天（86400秒），该属性不能修改。
     * @param integer $Qps 每秒钟发布消息的条数。
     * @param integer $CreateTime 主题的创建时间。返回 Unix 时间戳，精确到秒。
     * @param integer $Migrate 是否迁移到新版本。0 表示未迁移，1 表示迁移中，2 表示已经迁移完毕，3 表示回切状态，曾经迁移过，4 未知状态。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Migrate",$param) and $param["Migrate"] !== null) {
            $this->Migrate = $param["Migrate"];
        }
    }
}
