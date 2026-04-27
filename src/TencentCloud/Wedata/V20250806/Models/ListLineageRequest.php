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
 * @method string getResourceUniqueId() 获取<p>实体唯一ID</p>
 * @method void setResourceUniqueId(string $ResourceUniqueId) 设置<p>实体唯一ID</p>
 * @method string getResourceType() 获取<p>实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN</p>
 * @method void setResourceType(string $ResourceType) 设置<p>实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN</p>
 * @method string getDirection() 获取<p>血缘方向 INPUT｜OUTPUT</p>
 * @method void setDirection(string $Direction) 设置<p>血缘方向 INPUT｜OUTPUT</p>
 * @method integer getPageNumber() 获取<p>页码</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p>
 * @method integer getPageSize() 获取<p>分页大小</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小</p>
 * @method string getPlatform() 获取<p>来源：WEDATA|THIRD 默认WEDATA</p>
 * @method void setPlatform(string $Platform) 设置<p>来源：WEDATA|THIRD 默认WEDATA</p>
 */
class ListLineageRequest extends AbstractModel
{
    /**
     * @var string <p>实体唯一ID</p>
     */
    public $ResourceUniqueId;

    /**
     * @var string <p>实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN</p>
     */
    public $ResourceType;

    /**
     * @var string <p>血缘方向 INPUT｜OUTPUT</p>
     */
    public $Direction;

    /**
     * @var integer <p>页码</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>分页大小</p>
     */
    public $PageSize;

    /**
     * @var string <p>来源：WEDATA|THIRD 默认WEDATA</p>
     */
    public $Platform;

    /**
     * @param string $ResourceUniqueId <p>实体唯一ID</p>
     * @param string $ResourceType <p>实体类型 TABLE|METRIC|MODEL|SERVICE|COLUMN</p>
     * @param string $Direction <p>血缘方向 INPUT｜OUTPUT</p>
     * @param integer $PageNumber <p>页码</p>
     * @param integer $PageSize <p>分页大小</p>
     * @param string $Platform <p>来源：WEDATA|THIRD 默认WEDATA</p>
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
