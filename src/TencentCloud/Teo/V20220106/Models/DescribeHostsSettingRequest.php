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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostsSetting请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method integer getOffset() 获取分页查询偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0
 * @method integer getLimit() 获取分页查询限制数目，默认为 100，最大可设置为 1000
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认为 100，最大可设置为 1000
 * @method array getHosts() 获取指定域名查询
 * @method void setHosts(array $Hosts) 设置指定域名查询
 */
class DescribeHostsSettingRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认为 100，最大可设置为 1000
     */
    public $Limit;

    /**
     * @var array 指定域名查询
     */
    public $Hosts;

    /**
     * @param string $ZoneId 站点ID
     * @param integer $Offset 分页查询偏移量，默认为 0
     * @param integer $Limit 分页查询限制数目，默认为 100，最大可设置为 1000
     * @param array $Hosts 指定域名查询
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }
    }
}
