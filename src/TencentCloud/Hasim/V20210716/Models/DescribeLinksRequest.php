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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLinks请求参数结构体
 *
 * @method integer getLinkID() 获取云兔卡ID
 * @method void setLinkID(integer $LinkID) 设置云兔卡ID
 * @method string getICCID() 获取运营商ICCID
 * @method void setICCID(string $ICCID) 设置运营商ICCID
 * @method string getIMEI() 获取设备码
 * @method void setIMEI(string $IMEI) 设置设备码
 * @method integer getStatus() 获取卡片状态
 * @method void setStatus(integer $Status) 设置卡片状态
 * @method integer getTeleOperator() 获取运营商 1移动 2联通 3电信
 * @method void setTeleOperator(integer $TeleOperator) 设置运营商 1移动 2联通 3电信
 * @method integer getTagID() 获取标签ID
 * @method void setTagID(integer $TagID) 设置标签ID
 * @method integer getTacticID() 获取策略ID
 * @method void setTacticID(integer $TacticID) 设置策略ID
 * @method integer getLinkedState() 获取设备在线状态 0 未激活 1 在线 2 离线
 * @method void setLinkedState(integer $LinkedState) 设置设备在线状态 0 未激活 1 在线 2 离线
 * @method array getTagIDs() 获取标签ID 集合
 * @method void setTagIDs(array $TagIDs) 设置标签ID 集合
 * @method integer getLimit() 获取翻页大小, 默认翻页大小为10，最大数量为500
 * @method void setLimit(integer $Limit) 设置翻页大小, 默认翻页大小为10，最大数量为500
 * @method integer getOffset() 获取翻页起始
 * @method void setOffset(integer $Offset) 设置翻页起始
 */
class DescribeLinksRequest extends AbstractModel
{
    /**
     * @var integer 云兔卡ID
     */
    public $LinkID;

    /**
     * @var string 运营商ICCID
     */
    public $ICCID;

    /**
     * @var string 设备码
     */
    public $IMEI;

    /**
     * @var integer 卡片状态
     */
    public $Status;

    /**
     * @var integer 运营商 1移动 2联通 3电信
     */
    public $TeleOperator;

    /**
     * @var integer 标签ID
     */
    public $TagID;

    /**
     * @var integer 策略ID
     */
    public $TacticID;

    /**
     * @var integer 设备在线状态 0 未激活 1 在线 2 离线
     */
    public $LinkedState;

    /**
     * @var array 标签ID 集合
     */
    public $TagIDs;

    /**
     * @var integer 翻页大小, 默认翻页大小为10，最大数量为500
     */
    public $Limit;

    /**
     * @var integer 翻页起始
     */
    public $Offset;

    /**
     * @param integer $LinkID 云兔卡ID
     * @param string $ICCID 运营商ICCID
     * @param string $IMEI 设备码
     * @param integer $Status 卡片状态
     * @param integer $TeleOperator 运营商 1移动 2联通 3电信
     * @param integer $TagID 标签ID
     * @param integer $TacticID 策略ID
     * @param integer $LinkedState 设备在线状态 0 未激活 1 在线 2 离线
     * @param array $TagIDs 标签ID 集合
     * @param integer $Limit 翻页大小, 默认翻页大小为10，最大数量为500
     * @param integer $Offset 翻页起始
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
        if (array_key_exists("LinkID",$param) and $param["LinkID"] !== null) {
            $this->LinkID = $param["LinkID"];
        }

        if (array_key_exists("ICCID",$param) and $param["ICCID"] !== null) {
            $this->ICCID = $param["ICCID"];
        }

        if (array_key_exists("IMEI",$param) and $param["IMEI"] !== null) {
            $this->IMEI = $param["IMEI"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TeleOperator",$param) and $param["TeleOperator"] !== null) {
            $this->TeleOperator = $param["TeleOperator"];
        }

        if (array_key_exists("TagID",$param) and $param["TagID"] !== null) {
            $this->TagID = $param["TagID"];
        }

        if (array_key_exists("TacticID",$param) and $param["TacticID"] !== null) {
            $this->TacticID = $param["TacticID"];
        }

        if (array_key_exists("LinkedState",$param) and $param["LinkedState"] !== null) {
            $this->LinkedState = $param["LinkedState"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
