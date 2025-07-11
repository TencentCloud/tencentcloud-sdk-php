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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationAuthNode请求参数结构体
 *
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍。默认值 : 0。
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍。默认值 : 0。
 * @method integer getLimit() 获取限制数目。取值范围：1~50。默认值：10。
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50。默认值：10。
 * @method string getAuthName() 获取互信主体名称。
 * @method void setAuthName(string $AuthName) 设置互信主体名称。
 */
class DescribeOrganizationAuthNodeRequest extends AbstractModel
{
    /**
     * @var integer 偏移量。取值是limit的整数倍。默认值 : 0。
     */
    public $Offset;

    /**
     * @var integer 限制数目。取值范围：1~50。默认值：10。
     */
    public $Limit;

    /**
     * @var string 互信主体名称。
     */
    public $AuthName;

    /**
     * @param integer $Offset 偏移量。取值是limit的整数倍。默认值 : 0。
     * @param integer $Limit 限制数目。取值范围：1~50。默认值：10。
     * @param string $AuthName 互信主体名称。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AuthName",$param) and $param["AuthName"] !== null) {
            $this->AuthName = $param["AuthName"];
        }
    }
}
