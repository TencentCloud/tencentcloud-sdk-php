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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockIgnoreList返回参数结构体
 *
 * @method array getData() 获取列表数据
 * @method void setData(array $Data) 设置列表数据
 * @method integer getTotal() 获取查询结果总数，用于分页
 * @method void setTotal(integer $Total) 设置查询结果总数，用于分页
 * @method integer getReturnCode() 获取状态值，0：查询成功，非0：查询失败
 * @method void setReturnCode(integer $ReturnCode) 设置状态值，0：查询成功，非0：查询失败
 * @method string getReturnMsg() 获取状态信息，success：查询成功，fail：查询失败
 * @method void setReturnMsg(string $ReturnMsg) 设置状态信息，success：查询成功，fail：查询失败
 * @method array getSourceList() 获取安全事件来源下拉框
 * @method void setSourceList(array $SourceList) 设置安全事件来源下拉框
 * @method array getRuleTypeDataList() 获取对应规则类型的数量，示例：[0,122,30,55,12,232,0]，封禁0个，IP地址122个，域名30个，威胁情报55个，资产实例12个，自定义策略232个，入侵防御规则0个
 * @method void setRuleTypeDataList(array $RuleTypeDataList) 设置对应规则类型的数量，示例：[0,122,30,55,12,232,0]，封禁0个，IP地址122个，域名30个，威胁情报55个，资产实例12个，自定义策略232个，入侵防御规则0个
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBlockIgnoreListResponse extends AbstractModel
{
    /**
     * @var array 列表数据
     */
    public $Data;

    /**
     * @var integer 查询结果总数，用于分页
     */
    public $Total;

    /**
     * @var integer 状态值，0：查询成功，非0：查询失败
     */
    public $ReturnCode;

    /**
     * @var string 状态信息，success：查询成功，fail：查询失败
     */
    public $ReturnMsg;

    /**
     * @var array 安全事件来源下拉框
     */
    public $SourceList;

    /**
     * @var array 对应规则类型的数量，示例：[0,122,30,55,12,232,0]，封禁0个，IP地址122个，域名30个，威胁情报55个，资产实例12个，自定义策略232个，入侵防御规则0个
     */
    public $RuleTypeDataList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 列表数据
     * @param integer $Total 查询结果总数，用于分页
     * @param integer $ReturnCode 状态值，0：查询成功，非0：查询失败
     * @param string $ReturnMsg 状态信息，success：查询成功，fail：查询失败
     * @param array $SourceList 安全事件来源下拉框
     * @param array $RuleTypeDataList 对应规则类型的数量，示例：[0,122,30,55,12,232,0]，封禁0个，IP地址122个，域名30个，威胁情报55个，资产实例12个，自定义策略232个，入侵防御规则0个
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new BlockIgnoreRule();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("SourceList",$param) and $param["SourceList"] !== null) {
            $this->SourceList = $param["SourceList"];
        }

        if (array_key_exists("RuleTypeDataList",$param) and $param["RuleTypeDataList"] !== null) {
            $this->RuleTypeDataList = $param["RuleTypeDataList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
