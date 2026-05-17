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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos关联ak资产信息
 *
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getAkId() 获取ak id
 * @method void setAkId(string $AkId) 设置ak id
 * @method string getAkName() 获取ak名称
 * @method void setAkName(string $AkName) 设置ak名称
 * @method string getAkRemark() 获取ak备注
 * @method void setAkRemark(string $AkRemark) 设置ak备注
 * @method string getAkOwnerUin() 获取ak所属uin
 * @method void setAkOwnerUin(string $AkOwnerUin) 设置ak所属uin
 * @method integer getAkOwnerType() 获取ak类型 1 主 2 子
 * @method void setAkOwnerType(integer $AkOwnerType) 设置ak类型 1 主 2 子
 * @method string getAkOwnerName() 获取ak所属账号名
 * @method void setAkOwnerName(string $AkOwnerName) 设置ak所属账号名
 * @method string getAkMainOwnerName() 获取ak主账号名
 * @method void setAkMainOwnerName(string $AkMainOwnerName) 设置ak主账号名
 * @method array getAkRelBucketSet() 获取ak关联桶集合
 * @method void setAkRelBucketSet(array $AkRelBucketSet) 设置ak关联桶集合
 * @method array getAkRelAlarmSet() 获取ak关联告警集合
 * @method void setAkRelAlarmSet(array $AkRelAlarmSet) 设置ak关联告警集合
 * @method integer getAkRelIpCount() 获取Ak关联ip数
 * @method void setAkRelIpCount(integer $AkRelIpCount) 设置Ak关联ip数
 * @method integer getAkStatus() 获取ak状态 0 禁用 1 启用
 * @method void setAkStatus(integer $AkStatus) 设置ak状态 0 禁用 1 启用
 * @method integer getCreateTimestamp() 获取创建时间
 * @method void setCreateTimestamp(integer $CreateTimestamp) 设置创建时间
 * @method integer getLastAccessTimestamp() 获取最后访问时间
 * @method void setLastAccessTimestamp(integer $LastAccessTimestamp) 设置最后访问时间
 */
class CosAkAssetInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string ak id
     */
    public $AkId;

    /**
     * @var string ak名称
     */
    public $AkName;

    /**
     * @var string ak备注
     */
    public $AkRemark;

    /**
     * @var string ak所属uin
     */
    public $AkOwnerUin;

    /**
     * @var integer ak类型 1 主 2 子
     */
    public $AkOwnerType;

    /**
     * @var string ak所属账号名
     */
    public $AkOwnerName;

    /**
     * @var string ak主账号名
     */
    public $AkMainOwnerName;

    /**
     * @var array ak关联桶集合
     */
    public $AkRelBucketSet;

    /**
     * @var array ak关联告警集合
     */
    public $AkRelAlarmSet;

    /**
     * @var integer Ak关联ip数
     */
    public $AkRelIpCount;

    /**
     * @var integer ak状态 0 禁用 1 启用
     */
    public $AkStatus;

    /**
     * @var integer 创建时间
     */
    public $CreateTimestamp;

    /**
     * @var integer 最后访问时间
     */
    public $LastAccessTimestamp;

    /**
     * @param integer $AppId appid
     * @param string $AkId ak id
     * @param string $AkName ak名称
     * @param string $AkRemark ak备注
     * @param string $AkOwnerUin ak所属uin
     * @param integer $AkOwnerType ak类型 1 主 2 子
     * @param string $AkOwnerName ak所属账号名
     * @param string $AkMainOwnerName ak主账号名
     * @param array $AkRelBucketSet ak关联桶集合
     * @param array $AkRelAlarmSet ak关联告警集合
     * @param integer $AkRelIpCount Ak关联ip数
     * @param integer $AkStatus ak状态 0 禁用 1 启用
     * @param integer $CreateTimestamp 创建时间
     * @param integer $LastAccessTimestamp 最后访问时间
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AkId",$param) and $param["AkId"] !== null) {
            $this->AkId = $param["AkId"];
        }

        if (array_key_exists("AkName",$param) and $param["AkName"] !== null) {
            $this->AkName = $param["AkName"];
        }

        if (array_key_exists("AkRemark",$param) and $param["AkRemark"] !== null) {
            $this->AkRemark = $param["AkRemark"];
        }

        if (array_key_exists("AkOwnerUin",$param) and $param["AkOwnerUin"] !== null) {
            $this->AkOwnerUin = $param["AkOwnerUin"];
        }

        if (array_key_exists("AkOwnerType",$param) and $param["AkOwnerType"] !== null) {
            $this->AkOwnerType = $param["AkOwnerType"];
        }

        if (array_key_exists("AkOwnerName",$param) and $param["AkOwnerName"] !== null) {
            $this->AkOwnerName = $param["AkOwnerName"];
        }

        if (array_key_exists("AkMainOwnerName",$param) and $param["AkMainOwnerName"] !== null) {
            $this->AkMainOwnerName = $param["AkMainOwnerName"];
        }

        if (array_key_exists("AkRelBucketSet",$param) and $param["AkRelBucketSet"] !== null) {
            $this->AkRelBucketSet = $param["AkRelBucketSet"];
        }

        if (array_key_exists("AkRelAlarmSet",$param) and $param["AkRelAlarmSet"] !== null) {
            $this->AkRelAlarmSet = [];
            foreach ($param["AkRelAlarmSet"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->AkRelAlarmSet, $obj);
            }
        }

        if (array_key_exists("AkRelIpCount",$param) and $param["AkRelIpCount"] !== null) {
            $this->AkRelIpCount = $param["AkRelIpCount"];
        }

        if (array_key_exists("AkStatus",$param) and $param["AkStatus"] !== null) {
            $this->AkStatus = $param["AkStatus"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("LastAccessTimestamp",$param) and $param["LastAccessTimestamp"] !== null) {
            $this->LastAccessTimestamp = $param["LastAccessTimestamp"];
        }
    }
}
