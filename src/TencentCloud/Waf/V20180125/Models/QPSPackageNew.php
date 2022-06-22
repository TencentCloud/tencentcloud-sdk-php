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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * clb-waf QPS套餐 New
 *
 * @method string getResourceIds() 获取资源ID
 * @method void setResourceIds(string $ResourceIds) 设置资源ID
 * @method string getValidTime() 获取过期时间
 * @method void setValidTime(string $ValidTime) 设置过期时间
 * @method integer getRenewFlag() 获取是否自动续费，1：自动续费，0：不自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置是否自动续费，1：自动续费，0：不自动续费
 * @method integer getCount() 获取套餐购买个数
 * @method void setCount(integer $Count) 设置套餐购买个数
 * @method string getRegion() 获取套餐购买地域，clb-waf暂时没有用到
 * @method void setRegion(string $Region) 设置套餐购买地域，clb-waf暂时没有用到
 */
class QPSPackageNew extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $ResourceIds;

    /**
     * @var string 过期时间
     */
    public $ValidTime;

    /**
     * @var integer 是否自动续费，1：自动续费，0：不自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 套餐购买个数
     */
    public $Count;

    /**
     * @var string 套餐购买地域，clb-waf暂时没有用到
     */
    public $Region;

    /**
     * @param string $ResourceIds 资源ID
     * @param string $ValidTime 过期时间
     * @param integer $RenewFlag 是否自动续费，1：自动续费，0：不自动续费
     * @param integer $Count 套餐购买个数
     * @param string $Region 套餐购买地域，clb-waf暂时没有用到
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
        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
