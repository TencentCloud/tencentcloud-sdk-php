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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 补丁详细信息
 *
 * @method string getName() 获取补丁名
 * @method void setName(string $Name) 设置补丁名
 * @method string getKbNo() 获取补丁编号
 * @method void setKbNo(string $KbNo) 设置补丁编号
 * @method string getPublishTime() 获取披露时间
 * @method void setPublishTime(string $PublishTime) 设置披露时间
 * @method integer getEffectHostCount() 获取影响主机数量
 * @method void setEffectHostCount(integer $EffectHostCount) 设置影响主机数量
 * @method integer getRelateVulCount() 获取关联的漏洞数
 * @method void setRelateVulCount(integer $RelateVulCount) 设置关联的漏洞数
 * @method array getRelateVulList() 获取关联的漏洞编号数组
 * @method void setRelateVulList(array $RelateVulList) 设置关联的漏洞编号数组
 * @method integer getIsNew() 获取是否为最新披露，0否，1是，默认为否
 * @method void setIsNew(integer $IsNew) 设置是否为最新披露，0否，1是，默认为否
 * @method string getLastScanTime() 获取最后扫描时间
 * @method void setLastScanTime(string $LastScanTime) 设置最后扫描时间
 * @method integer getStatus() 获取0待处理,1忽略,3修复
 * @method void setStatus(integer $Status) 设置0待处理,1忽略,3修复
 * @method string getKbPreCondition() 获取安装该kb的前置条件，一般为其他kb，且可能有多个，kb之间用", "分隔
 * @method void setKbPreCondition(string $KbPreCondition) 设置安装该kb的前置条件，一般为其他kb，且可能有多个，kb之间用", "分隔
 * @method string getRelatedProduct() 获取该kb关联的windows product名称
 * @method void setRelatedProduct(string $RelatedProduct) 设置该kb关联的windows product名称
 * @method integer getKbId() 获取补丁id
 * @method void setKbId(integer $KbId) 设置补丁id
 * @method string getIds() 获取相关kb事件的id集合
 * @method void setIds(string $Ids) 设置相关kb事件的id集合
 */
class EventPatchInfo extends AbstractModel
{
    /**
     * @var string 补丁名
     */
    public $Name;

    /**
     * @var string 补丁编号
     */
    public $KbNo;

    /**
     * @var string 披露时间
     */
    public $PublishTime;

    /**
     * @var integer 影响主机数量
     */
    public $EffectHostCount;

    /**
     * @var integer 关联的漏洞数
     */
    public $RelateVulCount;

    /**
     * @var array 关联的漏洞编号数组
     */
    public $RelateVulList;

    /**
     * @var integer 是否为最新披露，0否，1是，默认为否
     */
    public $IsNew;

    /**
     * @var string 最后扫描时间
     */
    public $LastScanTime;

    /**
     * @var integer 0待处理,1忽略,3修复
     */
    public $Status;

    /**
     * @var string 安装该kb的前置条件，一般为其他kb，且可能有多个，kb之间用", "分隔
     */
    public $KbPreCondition;

    /**
     * @var string 该kb关联的windows product名称
     */
    public $RelatedProduct;

    /**
     * @var integer 补丁id
     */
    public $KbId;

    /**
     * @var string 相关kb事件的id集合
     */
    public $Ids;

    /**
     * @param string $Name 补丁名
     * @param string $KbNo 补丁编号
     * @param string $PublishTime 披露时间
     * @param integer $EffectHostCount 影响主机数量
     * @param integer $RelateVulCount 关联的漏洞数
     * @param array $RelateVulList 关联的漏洞编号数组
     * @param integer $IsNew 是否为最新披露，0否，1是，默认为否
     * @param string $LastScanTime 最后扫描时间
     * @param integer $Status 0待处理,1忽略,3修复
     * @param string $KbPreCondition 安装该kb的前置条件，一般为其他kb，且可能有多个，kb之间用", "分隔
     * @param string $RelatedProduct 该kb关联的windows product名称
     * @param integer $KbId 补丁id
     * @param string $Ids 相关kb事件的id集合
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("EffectHostCount",$param) and $param["EffectHostCount"] !== null) {
            $this->EffectHostCount = $param["EffectHostCount"];
        }

        if (array_key_exists("RelateVulCount",$param) and $param["RelateVulCount"] !== null) {
            $this->RelateVulCount = $param["RelateVulCount"];
        }

        if (array_key_exists("RelateVulList",$param) and $param["RelateVulList"] !== null) {
            $this->RelateVulList = $param["RelateVulList"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("KbPreCondition",$param) and $param["KbPreCondition"] !== null) {
            $this->KbPreCondition = $param["KbPreCondition"];
        }

        if (array_key_exists("RelatedProduct",$param) and $param["RelatedProduct"] !== null) {
            $this->RelatedProduct = $param["RelatedProduct"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }
    }
}
