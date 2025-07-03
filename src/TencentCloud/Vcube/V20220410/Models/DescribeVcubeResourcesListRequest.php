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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVcubeResourcesList请求参数结构体
 *
 * @method integer getPageNumber() 获取查询资源页码
 * @method void setPageNumber(integer $PageNumber) 设置查询资源页码
 * @method integer getPageSize() 获取每页的数据量
 * @method void setPageSize(integer $PageSize) 设置每页的数据量
 * @method string getAppName() 获取应用名称，模块查询
 * @method void setAppName(string $AppName) 设置应用名称，模块查询
 * @method string getResourceId() 获取资源Id，资源包id或者license资源id
 * @method void setResourceId(string $ResourceId) 设置资源Id，资源包id或者license资源id
 * @method string getWord() 获取资源Id、应用名称、包名
 * @method void setWord(string $Word) 设置资源Id、应用名称、包名
 * @method string getPlatform() 获取查询资源所属平台，web、mobile
 * @method void setPlatform(string $Platform) 设置查询资源所属平台，web、mobile
 */
class DescribeVcubeResourcesListRequest extends AbstractModel
{
    /**
     * @var integer 查询资源页码
     */
    public $PageNumber;

    /**
     * @var integer 每页的数据量
     */
    public $PageSize;

    /**
     * @var string 应用名称，模块查询
     */
    public $AppName;

    /**
     * @var string 资源Id，资源包id或者license资源id
     */
    public $ResourceId;

    /**
     * @var string 资源Id、应用名称、包名
     */
    public $Word;

    /**
     * @var string 查询资源所属平台，web、mobile
     */
    public $Platform;

    /**
     * @param integer $PageNumber 查询资源页码
     * @param integer $PageSize 每页的数据量
     * @param string $AppName 应用名称，模块查询
     * @param string $ResourceId 资源Id，资源包id或者license资源id
     * @param string $Word 资源Id、应用名称、包名
     * @param string $Platform 查询资源所属平台，web、mobile
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }
    }
}
