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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一组相关联的装箱配额信息
 *
 * @method string getInstanceType() 获取实例类型
 * @method void setInstanceType(string $InstanceType) 设置实例类型
 * @method integer getPackingQuota() 获取装箱配额
 * @method void setPackingQuota(integer $PackingQuota) 设置装箱配额
 */
class PackingQuotaInfo extends AbstractModel
{
    /**
     * @var string 实例类型
     */
    public $InstanceType;

    /**
     * @var integer 装箱配额
     */
    public $PackingQuota;

    /**
     * @param string $InstanceType 实例类型
     * @param integer $PackingQuota 装箱配额
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PackingQuota",$param) and $param["PackingQuota"] !== null) {
            $this->PackingQuota = $param["PackingQuota"];
        }
    }
}
