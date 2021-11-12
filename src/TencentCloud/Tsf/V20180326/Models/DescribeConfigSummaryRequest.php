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
 * DescribeConfigSummary请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID，不传入时查询全量
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，不传入时查询全量
 * @method string getSearchWord() 获取查询关键字，模糊查询：应用名称，配置项名称，不传入时查询全量
 * @method void setSearchWord(string $SearchWord) 设置查询关键字，模糊查询：应用名称，配置项名称，不传入时查询全量
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取每页条数，默认为20
 * @method void setLimit(integer $Limit) 设置每页条数，默认为20
 * @method string getOrderBy() 获取按时间排序：creation_time；按名称排序：config_name
 * @method void setOrderBy(string $OrderBy) 设置按时间排序：creation_time；按名称排序：config_name
 * @method integer getOrderType() 获取升序传 0，降序传 1
 * @method void setOrderType(integer $OrderType) 设置升序传 0，降序传 1
 * @method array getConfigTagList() 获取无
 * @method void setConfigTagList(array $ConfigTagList) 设置无
 * @method boolean getDisableProgramAuthCheck() 获取无
 * @method void setDisableProgramAuthCheck(boolean $DisableProgramAuthCheck) 设置无
 * @method array getConfigIdList() 获取无
 * @method void setConfigIdList(array $ConfigIdList) 设置无
 */
class DescribeConfigSummaryRequest extends AbstractModel
{
    /**
     * @var string 应用ID，不传入时查询全量
     */
    public $ApplicationId;

    /**
     * @var string 查询关键字，模糊查询：应用名称，配置项名称，不传入时查询全量
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 每页条数，默认为20
     */
    public $Limit;

    /**
     * @var string 按时间排序：creation_time；按名称排序：config_name
     */
    public $OrderBy;

    /**
     * @var integer 升序传 0，降序传 1
     */
    public $OrderType;

    /**
     * @var array 无
     */
    public $ConfigTagList;

    /**
     * @var boolean 无
     */
    public $DisableProgramAuthCheck;

    /**
     * @var array 无
     */
    public $ConfigIdList;

    /**
     * @param string $ApplicationId 应用ID，不传入时查询全量
     * @param string $SearchWord 查询关键字，模糊查询：应用名称，配置项名称，不传入时查询全量
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 每页条数，默认为20
     * @param string $OrderBy 按时间排序：creation_time；按名称排序：config_name
     * @param integer $OrderType 升序传 0，降序传 1
     * @param array $ConfigTagList 无
     * @param boolean $DisableProgramAuthCheck 无
     * @param array $ConfigIdList 无
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
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
