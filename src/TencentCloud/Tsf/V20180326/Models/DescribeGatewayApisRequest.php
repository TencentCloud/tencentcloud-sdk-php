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
 * DescribeGatewayApis请求参数结构体
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method integer getOffset() 获取翻页偏移量
 * @method void setOffset(integer $Offset) 设置翻页偏移量
 * @method integer getLimit() 获取每页的记录数
 * @method void setLimit(integer $Limit) 设置每页的记录数
 * @method string getSearchWord() 获取搜索关键字，支持 API path
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字，支持 API path
 * @method string getGatewayDeployGroupId() 获取部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置部署组ID
 */
class DescribeGatewayApisRequest extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var integer 翻页偏移量
     */
    public $Offset;

    /**
     * @var integer 每页的记录数
     */
    public $Limit;

    /**
     * @var string 搜索关键字，支持 API path
     */
    public $SearchWord;

    /**
     * @var string 部署组ID
     */
    public $GatewayDeployGroupId;

    /**
     * @param string $GroupId 分组ID
     * @param integer $Offset 翻页偏移量
     * @param integer $Limit 每页的记录数
     * @param string $SearchWord 搜索关键字，支持 API path
     * @param string $GatewayDeployGroupId 部署组ID
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }
    }
}
