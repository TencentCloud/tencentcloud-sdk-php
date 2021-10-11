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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchPositionSpace请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getSpaceName() 获取位置空间名字
 * @method void setSpaceName(string $SpaceName) 设置位置空间名字
 * @method integer getOffset() 获取偏移量，从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，从0开始
 * @method integer getLimit() 获取最大获取数量
 * @method void setLimit(integer $Limit) 设置最大获取数量
 */
class SearchPositionSpaceRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 位置空间名字
     */
    public $SpaceName;

    /**
     * @var integer 偏移量，从0开始
     */
    public $Offset;

    /**
     * @var integer 最大获取数量
     */
    public $Limit;

    /**
     * @param string $ProjectId 项目Id
     * @param string $SpaceName 位置空间名字
     * @param integer $Offset 偏移量，从0开始
     * @param integer $Limit 最大获取数量
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
