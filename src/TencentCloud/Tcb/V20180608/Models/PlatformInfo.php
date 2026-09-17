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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台版资源信息
 *
 * @method string getPlatformId() 获取<p>平台版套餐id</p>
 * @method void setPlatformId(string $PlatformId) 设置<p>平台版套餐id</p>
 * @method string getAlias() 获取<p>套餐别名</p>
 * @method void setAlias(string $Alias) 设置<p>套餐别名</p>
 * @method string getPackageId() 获取<p>套餐id</p>
 * @method void setPackageId(string $PackageId) 设置<p>套餐id</p>
 * @method string getBillStatus() 获取<p>计费状态</p><p>枚举值：</p><ul><li>normal： 正常</li><li>isolated： 已隔离</li><li>destroyed： 已销毁</li></ul>
 * @method void setBillStatus(string $BillStatus) 设置<p>计费状态</p><p>枚举值：</p><ul><li>normal： 正常</li><li>isolated： 已隔离</li><li>destroyed： 已销毁</li></ul>
 * @method integer getStatus() 获取<p>套餐资源状态</p><p>枚举值：</p><ul><li>0： 可用</li><li>5： 发货中</li></ul>
 * @method void setStatus(integer $Status) 设置<p>套餐资源状态</p><p>枚举值：</p><ul><li>0： 可用</li><li>5： 发货中</li></ul>
 * @method string getSpec() 获取<p>资源配置</p>
 * @method void setSpec(string $Spec) 设置<p>资源配置</p>
 * @method string getBillTime() 获取<p>购买时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setBillTime(string $BillTime) 设置<p>购买时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getExpireTime() 获取<p>套餐过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>套餐过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method integer getIsAutoRenew() 获取<p>是否自动续费</p><p>枚举值：</p><ul><li>0： 未设置</li><li>1： 自动续费</li><li>2： 设置为到期不续费</li></ul>
 * @method void setIsAutoRenew(integer $IsAutoRenew) 设置<p>是否自动续费</p><p>枚举值：</p><ul><li>0： 未设置</li><li>1： 自动续费</li><li>2： 设置为到期不续费</li></ul>
 * @method array getResources() 获取<p>资源信息列表</p>
 * @method void setResources(array $Resources) 设置<p>资源信息列表</p>
 * @method string getRegion() 获取<p>所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海</li><li>ap-singapore： 新加坡</li></ul>
 * @method void setRegion(string $Region) 设置<p>所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海</li><li>ap-singapore： 新加坡</li></ul>
 */
class PlatformInfo extends AbstractModel
{
    /**
     * @var string <p>平台版套餐id</p>
     */
    public $PlatformId;

    /**
     * @var string <p>套餐别名</p>
     */
    public $Alias;

    /**
     * @var string <p>套餐id</p>
     */
    public $PackageId;

    /**
     * @var string <p>计费状态</p><p>枚举值：</p><ul><li>normal： 正常</li><li>isolated： 已隔离</li><li>destroyed： 已销毁</li></ul>
     */
    public $BillStatus;

    /**
     * @var integer <p>套餐资源状态</p><p>枚举值：</p><ul><li>0： 可用</li><li>5： 发货中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>资源配置</p>
     */
    public $Spec;

    /**
     * @var string <p>购买时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $BillTime;

    /**
     * @var string <p>套餐过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ExpireTime;

    /**
     * @var integer <p>是否自动续费</p><p>枚举值：</p><ul><li>0： 未设置</li><li>1： 自动续费</li><li>2： 设置为到期不续费</li></ul>
     */
    public $IsAutoRenew;

    /**
     * @var array <p>资源信息列表</p>
     */
    public $Resources;

    /**
     * @var string <p>所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海</li><li>ap-singapore： 新加坡</li></ul>
     */
    public $Region;

    /**
     * @param string $PlatformId <p>平台版套餐id</p>
     * @param string $Alias <p>套餐别名</p>
     * @param string $PackageId <p>套餐id</p>
     * @param string $BillStatus <p>计费状态</p><p>枚举值：</p><ul><li>normal： 正常</li><li>isolated： 已隔离</li><li>destroyed： 已销毁</li></ul>
     * @param integer $Status <p>套餐资源状态</p><p>枚举值：</p><ul><li>0： 可用</li><li>5： 发货中</li></ul>
     * @param string $Spec <p>资源配置</p>
     * @param string $BillTime <p>购买时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $ExpireTime <p>套餐过期时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param integer $IsAutoRenew <p>是否自动续费</p><p>枚举值：</p><ul><li>0： 未设置</li><li>1： 自动续费</li><li>2： 设置为到期不续费</li></ul>
     * @param array $Resources <p>资源信息列表</p>
     * @param string $Region <p>所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海</li><li>ap-singapore： 新加坡</li></ul>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("BillStatus",$param) and $param["BillStatus"] !== null) {
            $this->BillStatus = $param["BillStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("BillTime",$param) and $param["BillTime"] !== null) {
            $this->BillTime = $param["BillTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsAutoRenew",$param) and $param["IsAutoRenew"] !== null) {
            $this->IsAutoRenew = $param["IsAutoRenew"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new PlatFormResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
