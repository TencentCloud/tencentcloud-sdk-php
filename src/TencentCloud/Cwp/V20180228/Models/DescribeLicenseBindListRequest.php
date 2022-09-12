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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseBindList请求参数结构体
 *
 * @method integer getLicenseId() 获取授权ID
 * @method void setLicenseId(integer $LicenseId) 设置授权ID
 * @method integer getLicenseType() 获取授权类型
 * @method void setLicenseType(integer $LicenseType) 设置授权类型
 * @method string getResourceId() 获取资源ID
 * @method void setResourceId(string $ResourceId) 设置资源ID
 * @method array getFilters() 获取<li>Keywords 机器别名/公私IP 模糊查询</li>
 * @method void setFilters(array $Filters) 设置<li>Keywords 机器别名/公私IP 模糊查询</li>
 * @method integer getLimit() 获取限制条数,默认10.
 * @method void setLimit(integer $Limit) 设置限制条数,默认10.
 * @method integer getOffset() 获取偏移量,默认0.
 * @method void setOffset(integer $Offset) 设置偏移量,默认0.
 */
class DescribeLicenseBindListRequest extends AbstractModel
{
    /**
     * @var integer 授权ID
     */
    public $LicenseId;

    /**
     * @var integer 授权类型
     */
    public $LicenseType;

    /**
     * @var string 资源ID
     */
    public $ResourceId;

    /**
     * @var array <li>Keywords 机器别名/公私IP 模糊查询</li>
     */
    public $Filters;

    /**
     * @var integer 限制条数,默认10.
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0.
     */
    public $Offset;

    /**
     * @param integer $LicenseId 授权ID
     * @param integer $LicenseType 授权类型
     * @param string $ResourceId 资源ID
     * @param array $Filters <li>Keywords 机器别名/公私IP 模糊查询</li>
     * @param integer $Limit 限制条数,默认10.
     * @param integer $Offset 偏移量,默认0.
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
        if (array_key_exists("LicenseId",$param) and $param["LicenseId"] !== null) {
            $this->LicenseId = $param["LicenseId"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
