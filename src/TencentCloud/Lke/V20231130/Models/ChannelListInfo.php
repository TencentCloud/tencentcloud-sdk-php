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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道详情信息
 *
 * @method integer getChannelType() 获取渠道类型 10000 微信订阅号 10001 微信服务号 10002 企微应用
 * @method void setChannelType(integer $ChannelType) 设置渠道类型 10000 微信订阅号 10001 微信服务号 10002 企微应用
 * @method integer getChannelStatus() 获取渠道状态 1未发布 2运行中 3已下线
 * @method void setChannelStatus(integer $ChannelStatus) 设置渠道状态 1未发布 2运行中 3已下线
 * @method string getChannelName() 获取渠道名称
 * @method void setChannelName(string $ChannelName) 设置渠道名称
 * @method string getChannelId() 获取渠道id 数据库主键
 * @method void setChannelId(string $ChannelId) 设置渠道id 数据库主键
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdatedUser() 获取最后更新人
 * @method void setUpdatedUser(string $UpdatedUser) 设置最后更新人
 * @method YuanQi getYuanQiInfo() 获取智能体应用可见范围，public-所有人可见 private-仅自己可见 share-通过分享可见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYuanQiInfo(YuanQi $YuanQiInfo) 设置智能体应用可见范围，public-所有人可见 private-仅自己可见 share-通过分享可见
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelListInfo extends AbstractModel
{
    /**
     * @var integer 渠道类型 10000 微信订阅号 10001 微信服务号 10002 企微应用
     */
    public $ChannelType;

    /**
     * @var integer 渠道状态 1未发布 2运行中 3已下线
     */
    public $ChannelStatus;

    /**
     * @var string 渠道名称
     */
    public $ChannelName;

    /**
     * @var string 渠道id 数据库主键
     */
    public $ChannelId;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后更新人
     */
    public $UpdatedUser;

    /**
     * @var YuanQi 智能体应用可见范围，public-所有人可见 private-仅自己可见 share-通过分享可见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YuanQiInfo;

    /**
     * @param integer $ChannelType 渠道类型 10000 微信订阅号 10001 微信服务号 10002 企微应用
     * @param integer $ChannelStatus 渠道状态 1未发布 2运行中 3已下线
     * @param string $ChannelName 渠道名称
     * @param string $ChannelId 渠道id 数据库主键
     * @param string $Comment 备注
     * @param string $UpdateTime 更新时间
     * @param string $CreateTime 创建时间
     * @param string $UpdatedUser 最后更新人
     * @param YuanQi $YuanQiInfo 智能体应用可见范围，public-所有人可见 private-仅自己可见 share-通过分享可见
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("ChannelStatus",$param) and $param["ChannelStatus"] !== null) {
            $this->ChannelStatus = $param["ChannelStatus"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("YuanQiInfo",$param) and $param["YuanQiInfo"] !== null) {
            $this->YuanQiInfo = new YuanQi();
            $this->YuanQiInfo->deserialize($param["YuanQiInfo"]);
        }
    }
}
