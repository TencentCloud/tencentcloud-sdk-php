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
 * DescribeDeliveryConfigs请求参数结构体
 *
 * @method string getSearchWord() 获取搜索关键字，可搜索日志投递配置项ID或日志投递配置项名称
 * @method void setSearchWord(string $SearchWord) 设置搜索关键字，可搜索日志投递配置项ID或日志投递配置项名称
 * @method integer getOffset() 获取偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 50]，默认值为10
 * @method array getProgramIdList() 获取数据集ID列表
可通过调用[DescribePrograms](https://cloud.tencent.com/document/product/649/73477)查询已创建的数据集列表或登录[控制台](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program&roleId=role-a22gwdwa)进行查看
 * @method void setProgramIdList(array $ProgramIdList) 设置数据集ID列表
可通过调用[DescribePrograms](https://cloud.tencent.com/document/product/649/73477)查询已创建的数据集列表或登录[控制台](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program&roleId=role-a22gwdwa)进行查看
 * @method array getConfigIdList() 获取日志配置项ID列表
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
 * @method void setConfigIdList(array $ConfigIdList) 设置日志配置项ID列表
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
 */
class DescribeDeliveryConfigsRequest extends AbstractModel
{
    /**
     * @var string 搜索关键字，可搜索日志投递配置项ID或日志投递配置项名称
     */
    public $SearchWord;

    /**
     * @var integer 偏移量，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 50]，默认值为10
     */
    public $Limit;

    /**
     * @var array 数据集ID列表
可通过调用[DescribePrograms](https://cloud.tencent.com/document/product/649/73477)查询已创建的数据集列表或登录[控制台](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program&roleId=role-a22gwdwa)进行查看
     */
    public $ProgramIdList;

    /**
     * @var array 日志配置项ID列表
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
     */
    public $ConfigIdList;

    /**
     * @param string $SearchWord 搜索关键字，可搜索日志投递配置项ID或日志投递配置项名称
     * @param integer $Offset 偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 50]，默认值为10
     * @param array $ProgramIdList 数据集ID列表
可通过调用[DescribePrograms](https://cloud.tencent.com/document/product/649/73477)查询已创建的数据集列表或登录[控制台](https://console.cloud.tencent.com/tsf/privilege?rid=1&tab=program&roleId=role-a22gwdwa)进行查看
     * @param array $ConfigIdList 日志配置项ID列表
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
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

        if (array_key_exists("ProgramIdList",$param) and $param["ProgramIdList"] !== null) {
            $this->ProgramIdList = $param["ProgramIdList"];
        }

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }
    }
}
