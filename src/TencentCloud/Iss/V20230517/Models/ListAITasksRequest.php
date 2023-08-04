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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAITasks请求参数结构体
 *
 * @method boolean getIsContainChannelList() 获取是否包含通道列表。"true"代表包含通道列表，"false"代表不包含通道列表，默认为 false
 * @method void setIsContainChannelList(boolean $IsContainChannelList) 设置是否包含通道列表。"true"代表包含通道列表，"false"代表不包含通道列表，默认为 false
 * @method boolean getIsContainTemplate() 获取是否包含AI配置。"true"代表包含任务配置，"false"代表不包含任务配置，默认为 false。
 * @method void setIsContainTemplate(boolean $IsContainTemplate) 设置是否包含AI配置。"true"代表包含任务配置，"false"代表不包含任务配置，默认为 false。
 * @method integer getPageNumber() 获取页码。默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页码。默认为1
 * @method integer getPageSize() 获取每页数量。可选值1～200，默认为20
 * @method void setPageSize(integer $PageSize) 设置每页数量。可选值1～200，默认为20
 */
class ListAITasksRequest extends AbstractModel
{
    /**
     * @var boolean 是否包含通道列表。"true"代表包含通道列表，"false"代表不包含通道列表，默认为 false
     */
    public $IsContainChannelList;

    /**
     * @var boolean 是否包含AI配置。"true"代表包含任务配置，"false"代表不包含任务配置，默认为 false。
     */
    public $IsContainTemplate;

    /**
     * @var integer 页码。默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页数量。可选值1～200，默认为20
     */
    public $PageSize;

    /**
     * @param boolean $IsContainChannelList 是否包含通道列表。"true"代表包含通道列表，"false"代表不包含通道列表，默认为 false
     * @param boolean $IsContainTemplate 是否包含AI配置。"true"代表包含任务配置，"false"代表不包含任务配置，默认为 false。
     * @param integer $PageNumber 页码。默认为1
     * @param integer $PageSize 每页数量。可选值1～200，默认为20
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
        if (array_key_exists("IsContainChannelList",$param) and $param["IsContainChannelList"] !== null) {
            $this->IsContainChannelList = $param["IsContainChannelList"];
        }

        if (array_key_exists("IsContainTemplate",$param) and $param["IsContainTemplate"] !== null) {
            $this->IsContainTemplate = $param["IsContainTemplate"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
