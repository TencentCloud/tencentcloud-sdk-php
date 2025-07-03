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
 * DescribeXMagicResourceList请求参数结构体
 *
 * @method integer getPageNumber() 获取分页页码 第一页是0
 * @method void setPageNumber(integer $PageNumber) 设置分页页码 第一页是0
 * @method integer getPageSize() 获取每页数量
 * @method void setPageSize(integer $PageSize) 设置每页数量
 * @method string getAppName() 获取关联的应用名称
 * @method void setAppName(string $AppName) 设置关联的应用名称
 * @method string getResourceId() 获取优图资源Id
 * @method void setResourceId(string $ResourceId) 设置优图资源Id
 * @method string getWord() 获取查询关键字，资源Id、应用名称、包名
 * @method void setWord(string $Word) 设置查询关键字，资源Id、应用名称、包名
 * @method string getPlatform() 获取平台信息，pc 或者 mobile
 * @method void setPlatform(string $Platform) 设置平台信息，pc 或者 mobile
 * @method string getBizType() 获取所属业务，xmagic：优图， avatar：虚拟人，不传查全部
 * @method void setBizType(string $BizType) 设置所属业务，xmagic：优图， avatar：虚拟人，不传查全部
 */
class DescribeXMagicResourceListRequest extends AbstractModel
{
    /**
     * @var integer 分页页码 第一页是0
     */
    public $PageNumber;

    /**
     * @var integer 每页数量
     */
    public $PageSize;

    /**
     * @var string 关联的应用名称
     */
    public $AppName;

    /**
     * @var string 优图资源Id
     */
    public $ResourceId;

    /**
     * @var string 查询关键字，资源Id、应用名称、包名
     */
    public $Word;

    /**
     * @var string 平台信息，pc 或者 mobile
     */
    public $Platform;

    /**
     * @var string 所属业务，xmagic：优图， avatar：虚拟人，不传查全部
     */
    public $BizType;

    /**
     * @param integer $PageNumber 分页页码 第一页是0
     * @param integer $PageSize 每页数量
     * @param string $AppName 关联的应用名称
     * @param string $ResourceId 优图资源Id
     * @param string $Word 查询关键字，资源Id、应用名称、包名
     * @param string $Platform 平台信息，pc 或者 mobile
     * @param string $BizType 所属业务，xmagic：优图， avatar：虚拟人，不传查全部
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

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }
    }
}
