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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRiskCenterAssetViewPortRiskList返回参数结构体
 *
 * @method integer getTotalCount() 获取总条数
 * @method void setTotalCount(integer $TotalCount) 设置总条数
 * @method array getData() 获取资产视角的配置风险列表
 * @method void setData(array $Data) 设置资产视角的配置风险列表
 * @method array getStatusLists() 获取状态列表
 * @method void setStatusLists(array $StatusLists) 设置状态列表
 * @method array getLevelLists() 获取危险等级列表
 * @method void setLevelLists(array $LevelLists) 设置危险等级列表
 * @method array getSuggestionLists() 获取建议列表
 * @method void setSuggestionLists(array $SuggestionLists) 设置建议列表
 * @method array getInstanceTypeLists() 获取资产类型列表
 * @method void setInstanceTypeLists(array $InstanceTypeLists) 设置资产类型列表
 * @method array getFromLists() 获取来源列表
 * @method void setFromLists(array $FromLists) 设置来源列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRiskCenterAssetViewPortRiskListResponse extends AbstractModel
{
    /**
     * @var integer 总条数
     */
    public $TotalCount;

    /**
     * @var array 资产视角的配置风险列表
     */
    public $Data;

    /**
     * @var array 状态列表
     */
    public $StatusLists;

    /**
     * @var array 危险等级列表
     */
    public $LevelLists;

    /**
     * @var array 建议列表
     */
    public $SuggestionLists;

    /**
     * @var array 资产类型列表
     */
    public $InstanceTypeLists;

    /**
     * @var array 来源列表
     */
    public $FromLists;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总条数
     * @param array $Data 资产视角的配置风险列表
     * @param array $StatusLists 状态列表
     * @param array $LevelLists 危险等级列表
     * @param array $SuggestionLists 建议列表
     * @param array $InstanceTypeLists 资产类型列表
     * @param array $FromLists 来源列表
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AssetViewPortRisk();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("StatusLists",$param) and $param["StatusLists"] !== null) {
            $this->StatusLists = [];
            foreach ($param["StatusLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->StatusLists, $obj);
            }
        }

        if (array_key_exists("LevelLists",$param) and $param["LevelLists"] !== null) {
            $this->LevelLists = [];
            foreach ($param["LevelLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->LevelLists, $obj);
            }
        }

        if (array_key_exists("SuggestionLists",$param) and $param["SuggestionLists"] !== null) {
            $this->SuggestionLists = [];
            foreach ($param["SuggestionLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->SuggestionLists, $obj);
            }
        }

        if (array_key_exists("InstanceTypeLists",$param) and $param["InstanceTypeLists"] !== null) {
            $this->InstanceTypeLists = [];
            foreach ($param["InstanceTypeLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->InstanceTypeLists, $obj);
            }
        }

        if (array_key_exists("FromLists",$param) and $param["FromLists"] !== null) {
            $this->FromLists = [];
            foreach ($param["FromLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->FromLists, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
