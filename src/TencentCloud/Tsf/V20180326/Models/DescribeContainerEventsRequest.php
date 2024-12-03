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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContainerEvents请求参数结构体
 *
 * @method string getResourceType() 获取event 的资源类型, group 或者 instance
 * @method void setResourceType(string $ResourceType) 设置event 的资源类型, group 或者 instance
 * @method string getResourceId() 获取event 的资源 id
 * @method void setResourceId(string $ResourceId) 设置event 的资源 id
 * @method integer getOffset() 获取偏移量，取值从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，取值从0开始
 * @method integer getLimit() 获取分页个数，默认为20， 取值应为1~50
 * @method void setLimit(integer $Limit) 设置分页个数，默认为20， 取值应为1~50
 * @method string getGroupId() 获取当类型是 instance 时需要
 * @method void setGroupId(string $GroupId) 设置当类型是 instance 时需要
 * @method string getKind() 获取event的资源kind
 * @method void setKind(string $Kind) 设置event的资源kind
 * @method string getType() 获取event 的type
 * @method void setType(string $Type) 设置event 的type
 * @method string getResourceName() 获取资源名称
 * @method void setResourceName(string $ResourceName) 设置资源名称
 * @method string getSearchWord() 获取关键词查询
 * @method void setSearchWord(string $SearchWord) 设置关键词查询
 */
class DescribeContainerEventsRequest extends AbstractModel
{
    /**
     * @var string event 的资源类型, group 或者 instance
     */
    public $ResourceType;

    /**
     * @var string event 的资源 id
     */
    public $ResourceId;

    /**
     * @var integer 偏移量，取值从0开始
     */
    public $Offset;

    /**
     * @var integer 分页个数，默认为20， 取值应为1~50
     */
    public $Limit;

    /**
     * @var string 当类型是 instance 时需要
     */
    public $GroupId;

    /**
     * @var string event的资源kind
     */
    public $Kind;

    /**
     * @var string event 的type
     */
    public $Type;

    /**
     * @var string 资源名称
     */
    public $ResourceName;

    /**
     * @var string 关键词查询
     */
    public $SearchWord;

    /**
     * @param string $ResourceType event 的资源类型, group 或者 instance
     * @param string $ResourceId event 的资源 id
     * @param integer $Offset 偏移量，取值从0开始
     * @param integer $Limit 分页个数，默认为20， 取值应为1~50
     * @param string $GroupId 当类型是 instance 时需要
     * @param string $Kind event的资源kind
     * @param string $Type event 的type
     * @param string $ResourceName 资源名称
     * @param string $SearchWord 关键词查询
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }
    }
}
