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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDimensionWeight请求参数结构体
 *
 * @method array getWeightInfoList() 获取权重信息列表
 * @method void setWeightInfoList(array $WeightInfoList) 设置权重信息列表
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method boolean getRefresh() 获取是否重刷历史数据
 * @method void setRefresh(boolean $Refresh) 设置是否重刷历史数据
 */
class ModifyDimensionWeightRequest extends AbstractModel
{
    /**
     * @var array 权重信息列表
     */
    public $WeightInfoList;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var boolean 是否重刷历史数据
     */
    public $Refresh;

    /**
     * @param array $WeightInfoList 权重信息列表
     * @param string $ProjectId 项目id
     * @param boolean $Refresh 是否重刷历史数据
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
        if (array_key_exists("WeightInfoList",$param) and $param["WeightInfoList"] !== null) {
            $this->WeightInfoList = [];
            foreach ($param["WeightInfoList"] as $key => $value){
                $obj = new WeightInfo();
                $obj->deserialize($value);
                array_push($this->WeightInfoList, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Refresh",$param) and $param["Refresh"] !== null) {
            $this->Refresh = $param["Refresh"];
        }
    }
}
