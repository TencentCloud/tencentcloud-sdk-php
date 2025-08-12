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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicConfigSummary请求参数结构体
 *
 * @method string getSearchWord() 获取查询关键字，模糊查询：配置项名称，不传入时查询全量。
 * @method void setSearchWord(string $SearchWord) 设置查询关键字，模糊查询：配置项名称，不传入时查询全量。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为50。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为50。
 * @method string getOrderBy() 获取排序字段。
- creation_time：按时间排序
- config_name：按名称排序
 * @method void setOrderBy(string $OrderBy) 设置排序字段。
- creation_time：按时间排序
- config_name：按名称排序
 * @method integer getOrderType() 获取排序顺序。
- 0：升序
- 1：降序
 * @method void setOrderType(integer $OrderType) 设置排序顺序。
- 0：升序
- 1：降序
 * @method array getConfigTagList() 获取TAG标签资源值。
 * @method void setConfigTagList(array $ConfigTagList) 设置TAG标签资源值。
 * @method boolean getDisableProgramAuthCheck() 获取忽略传参，业务预留字段。
 * @method void setDisableProgramAuthCheck(boolean $DisableProgramAuthCheck) 设置忽略传参，业务预留字段。
 * @method array getConfigIdList() 获取配置ID。该参数可以通过调用 [DescribePublicConfigs](https://cloud.tencent.com/document/product/649/38335) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=public)配置详情-配置版本页查看；也可以调用[CreatePublicConfig](https://cloud.tencent.com/document/product/649/38347)创建新的配置。
 * @method void setConfigIdList(array $ConfigIdList) 设置配置ID。该参数可以通过调用 [DescribePublicConfigs](https://cloud.tencent.com/document/product/649/38335) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=public)配置详情-配置版本页查看；也可以调用[CreatePublicConfig](https://cloud.tencent.com/document/product/649/38347)创建新的配置。
 */
class DescribePublicConfigSummaryRequest extends AbstractModel
{
    /**
     * @var string 查询关键字，模糊查询：配置项名称，不传入时查询全量。
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为50。
     */
    public $Limit;

    /**
     * @var string 排序字段。
- creation_time：按时间排序
- config_name：按名称排序
     */
    public $OrderBy;

    /**
     * @var integer 排序顺序。
- 0：升序
- 1：降序
     */
    public $OrderType;

    /**
     * @var array TAG标签资源值。
     */
    public $ConfigTagList;

    /**
     * @var boolean 忽略传参，业务预留字段。
     */
    public $DisableProgramAuthCheck;

    /**
     * @var array 配置ID。该参数可以通过调用 [DescribePublicConfigs](https://cloud.tencent.com/document/product/649/38335) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=public)配置详情-配置版本页查看；也可以调用[CreatePublicConfig](https://cloud.tencent.com/document/product/649/38347)创建新的配置。
     */
    public $ConfigIdList;

    /**
     * @param string $SearchWord 查询关键字，模糊查询：配置项名称，不传入时查询全量。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为50。
     * @param string $OrderBy 排序字段。
- creation_time：按时间排序
- config_name：按名称排序
     * @param integer $OrderType 排序顺序。
- 0：升序
- 1：降序
     * @param array $ConfigTagList TAG标签资源值。
     * @param boolean $DisableProgramAuthCheck 忽略传参，业务预留字段。
     * @param array $ConfigIdList 配置ID。该参数可以通过调用 [DescribePublicConfigs](https://cloud.tencent.com/document/product/649/38335) 的返回值中的 ConfigId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tse/tsf-consul?subTab=public)配置详情-配置版本页查看；也可以调用[CreatePublicConfig](https://cloud.tencent.com/document/product/649/38347)创建新的配置。
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("ConfigTagList",$param) and $param["ConfigTagList"] !== null) {
            $this->ConfigTagList = $param["ConfigTagList"];
        }

        if (array_key_exists("DisableProgramAuthCheck",$param) and $param["DisableProgramAuthCheck"] !== null) {
            $this->DisableProgramAuthCheck = $param["DisableProgramAuthCheck"];
        }

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }
    }
}
