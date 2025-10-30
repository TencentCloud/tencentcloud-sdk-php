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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLineage请求参数结构体
 *
 * @method string getResourceUniqueId() 获取实体唯一ID
 * @method void setResourceUniqueId(string $ResourceUniqueId) 设置实体唯一ID
 * @method string getResourceType() 获取实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN
 * @method void setResourceType(string $ResourceType) 设置实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN
 * @method string getDirection() 获取血缘方向 INPUT｜OUTPUT
 * @method void setDirection(string $Direction) 设置血缘方向 INPUT｜OUTPUT
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method string getPlatform() 获取来源：WEDATA|THIRD 默认WEDATA
 * @method void setPlatform(string $Platform) 设置来源：WEDATA|THIRD 默认WEDATA
 */
class ListLineageRequest extends AbstractModel
{
    /**
     * @var string 实体唯一ID
     */
    public $ResourceUniqueId;

    /**
     * @var string 实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN
     */
    public $ResourceType;

    /**
     * @var string 血缘方向 INPUT｜OUTPUT
     */
    public $Direction;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var string 来源：WEDATA|THIRD 默认WEDATA
     */
    public $Platform;

    /**
     * @param string $ResourceUniqueId 实体唯一ID
     * @param string $ResourceType 实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN
     * @param string $Direction 血缘方向 INPUT｜OUTPUT
     * @param integer $PageNumber 页码
     * @param integer $PageSize 分页大小
     * @param string $Platform 来源：WEDATA|THIRD 默认WEDATA
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
        if (array_key_exists("ResourceUniqueId",$param) and $param["ResourceUniqueId"] !== null) {
            $this->ResourceUniqueId = $param["ResourceUniqueId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
