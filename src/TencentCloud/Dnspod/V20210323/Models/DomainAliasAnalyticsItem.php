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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名别名解析量统计信息
 *
 * @method DomainAnalyticsInfo getInfo() 获取域名解析量统计查询信息
 * @method void setInfo(DomainAnalyticsInfo $Info) 设置域名解析量统计查询信息
 * @method array getData() 获取当前统计维度解析量小计
 * @method void setData(array $Data) 设置当前统计维度解析量小计
 */
class DomainAliasAnalyticsItem extends AbstractModel
{
    /**
     * @var DomainAnalyticsInfo 域名解析量统计查询信息
     */
    public $Info;

    /**
     * @var array 当前统计维度解析量小计
     */
    public $Data;

    /**
     * @param DomainAnalyticsInfo $Info 域名解析量统计查询信息
     * @param array $Data 当前统计维度解析量小计
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
        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = new DomainAnalyticsInfo();
            $this->Info->deserialize($param["Info"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new DomainAnalyticsDetail();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
