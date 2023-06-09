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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeParamTemplateDetail返回参数结构体
 *
 * @method integer getTemplateId() 获取参数模板ID
 * @method void setTemplateId(integer $TemplateId) 设置参数模板ID
 * @method string getTemplateName() 获取参数模板名称
 * @method void setTemplateName(string $TemplateName) 设置参数模板名称
 * @method string getTemplateDescription() 获取参数模板描述
 * @method void setTemplateDescription(string $TemplateDescription) 设置参数模板描述
 * @method string getEngineVersion() 获取引擎版本
 * @method void setEngineVersion(string $EngineVersion) 设置引擎版本
 * @method integer getTotalCount() 获取参数总条数
 * @method void setTotalCount(integer $TotalCount) 设置参数总条数
 * @method array getItems() 获取参数列表
 * @method void setItems(array $Items) 设置参数列表
 * @method string getDbMode() 获取数据库类型，可选值：NORMAL，SERVERLESS
 * @method void setDbMode(string $DbMode) 设置数据库类型，可选值：NORMAL，SERVERLESS
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeParamTemplateDetailResponse extends AbstractModel
{
    /**
     * @var integer 参数模板ID
     */
    public $TemplateId;

    /**
     * @var string 参数模板名称
     */
    public $TemplateName;

    /**
     * @var string 参数模板描述
     */
    public $TemplateDescription;

    /**
     * @var string 引擎版本
     */
    public $EngineVersion;

    /**
     * @var integer 参数总条数
     */
    public $TotalCount;

    /**
     * @var array 参数列表
     */
    public $Items;

    /**
     * @var string 数据库类型，可选值：NORMAL，SERVERLESS
     */
    public $DbMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TemplateId 参数模板ID
     * @param string $TemplateName 参数模板名称
     * @param string $TemplateDescription 参数模板描述
     * @param string $EngineVersion 引擎版本
     * @param integer $TotalCount 参数总条数
     * @param array $Items 参数列表
     * @param string $DbMode 数据库类型，可选值：NORMAL，SERVERLESS
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ParamDetail();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
