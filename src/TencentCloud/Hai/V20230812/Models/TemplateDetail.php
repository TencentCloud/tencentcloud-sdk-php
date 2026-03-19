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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板详情
 *
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method string getDeployMode() 获取部署方式
 * @method void setDeployMode(string $DeployMode) 设置部署方式
 * @method string getEngineType() 获取推理引擎
 * @method void setEngineType(string $EngineType) 设置推理引擎
 * @method array getComputeSet() 获取算力详情
 * @method void setComputeSet(array $ComputeSet) 设置算力详情
 * @method array getSupportFunc() 获取当前部署模板所支持的增强功能
 * @method void setSupportFunc(array $SupportFunc) 设置当前部署模板所支持的增强功能
 */
class TemplateDetail extends AbstractModel
{
    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var string 部署方式
     */
    public $DeployMode;

    /**
     * @var string 推理引擎
     */
    public $EngineType;

    /**
     * @var array 算力详情
     */
    public $ComputeSet;

    /**
     * @var array 当前部署模板所支持的增强功能
     */
    public $SupportFunc;

    /**
     * @param string $TemplateId 模板id
     * @param string $DeployMode 部署方式
     * @param string $EngineType 推理引擎
     * @param array $ComputeSet 算力详情
     * @param array $SupportFunc 当前部署模板所支持的增强功能
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

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("ComputeSet",$param) and $param["ComputeSet"] !== null) {
            $this->ComputeSet = [];
            foreach ($param["ComputeSet"] as $key => $value){
                $obj = new ComputeDetail();
                $obj->deserialize($value);
                array_push($this->ComputeSet, $obj);
            }
        }

        if (array_key_exists("SupportFunc",$param) and $param["SupportFunc"] !== null) {
            $this->SupportFunc = $param["SupportFunc"];
        }
    }
}
