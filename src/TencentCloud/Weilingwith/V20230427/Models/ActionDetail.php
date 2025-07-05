<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 详细动作信息
 *
 * @method integer getId() 获取动作id
 * @method void setId(integer $Id) 设置动作id
 * @method string getName() 获取动作名称
 * @method void setName(string $Name) 设置动作名称
 * @method string getActionType() 获取动作类型
 * @method void setActionType(string $ActionType) 设置动作类型
 * @method string getActionDesc() 获取动作说明
 * @method void setActionDesc(string $ActionDesc) 设置动作说明
 * @method string getMsgType() 获取消息类型，orgin/custom/model
 * @method void setMsgType(string $MsgType) 设置消息类型，orgin/custom/model
 * @method string getMsgContent() 获取消息内容,有效值为x-json:后的字段
 * @method void setMsgContent(string $MsgContent) 设置消息内容,有效值为x-json:后的字段
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getWID() 获取设备唯一标识
 * @method void setWID(string $WID) 设置设备唯一标识
 * @method array getLinkRuleSet() 获取关联故障列表
 * @method void setLinkRuleSet(array $LinkRuleSet) 设置关联故障列表
 * @method string getSinkConfig() 获取动作下沉配置,有效值为x-json:后的字段
 * @method void setSinkConfig(string $SinkConfig) 设置动作下沉配置,有效值为x-json:后的字段
 */
class ActionDetail extends AbstractModel
{
    /**
     * @var integer 动作id
     */
    public $Id;

    /**
     * @var string 动作名称
     */
    public $Name;

    /**
     * @var string 动作类型
     */
    public $ActionType;

    /**
     * @var string 动作说明
     */
    public $ActionDesc;

    /**
     * @var string 消息类型，orgin/custom/model
     */
    public $MsgType;

    /**
     * @var string 消息内容,有效值为x-json:后的字段
     */
    public $MsgContent;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 设备唯一标识
     */
    public $WID;

    /**
     * @var array 关联故障列表
     */
    public $LinkRuleSet;

    /**
     * @var string 动作下沉配置,有效值为x-json:后的字段
     */
    public $SinkConfig;

    /**
     * @param integer $Id 动作id
     * @param string $Name 动作名称
     * @param string $ActionType 动作类型
     * @param string $ActionDesc 动作说明
     * @param string $MsgType 消息类型，orgin/custom/model
     * @param string $MsgContent 消息内容,有效值为x-json:后的字段
     * @param string $CreateTime 创建时间
     * @param string $WID 设备唯一标识
     * @param array $LinkRuleSet 关联故障列表
     * @param string $SinkConfig 动作下沉配置,有效值为x-json:后的字段
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("MsgType",$param) and $param["MsgType"] !== null) {
            $this->MsgType = $param["MsgType"];
        }

        if (array_key_exists("MsgContent",$param) and $param["MsgContent"] !== null) {
            $this->MsgContent = $param["MsgContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("LinkRuleSet",$param) and $param["LinkRuleSet"] !== null) {
            $this->LinkRuleSet = [];
            foreach ($param["LinkRuleSet"] as $key => $value){
                $obj = new LinkRule();
                $obj->deserialize($value);
                array_push($this->LinkRuleSet, $obj);
            }
        }

        if (array_key_exists("SinkConfig",$param) and $param["SinkConfig"] !== null) {
            $this->SinkConfig = $param["SinkConfig"];
        }
    }
}
