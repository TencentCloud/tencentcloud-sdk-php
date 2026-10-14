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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkflowRun请求参数结构体
 *
 * @method string getAppId() 获取<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method void setAppId(string $AppId) 设置<p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
 * @method integer getDomain() 获取<p>运行环境。1:开发域，2:生产域</p>
 * @method void setDomain(integer $Domain) 设置<p>运行环境。1:开发域，2:生产域</p>
 * @method string getQuery() 获取<p>用户输入的内容</p>
 * @method void setQuery(string $Query) 设置<p>用户输入的内容</p>
 * @method array getCustomVariableList() 获取<p>API参数配置</p>
 * @method void setCustomVariableList(array $CustomVariableList) 设置<p>API参数配置</p>
 * @method string getUserId() 获取<p>用户ID</p>
 * @method void setUserId(string $UserId) 设置<p>用户ID</p>
 */
class CreateWorkflowRunRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     */
    public $AppId;

    /**
     * @var integer <p>运行环境。1:开发域，2:生产域</p>
     */
    public $Domain;

    /**
     * @var string <p>用户输入的内容</p>
     */
    public $Query;

    /**
     * @var array <p>API参数配置</p>
     */
    public $CustomVariableList;

    /**
     * @var string <p>用户ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>应用ID, 获取方法参看如何获取 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">AppId</a></p>
     * @param integer $Domain <p>运行环境。1:开发域，2:生产域</p>
     * @param string $Query <p>用户输入的内容</p>
     * @param array $CustomVariableList <p>API参数配置</p>
     * @param string $UserId <p>用户ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("CustomVariableList",$param) and $param["CustomVariableList"] !== null) {
            $this->CustomVariableList = [];
            foreach ($param["CustomVariableList"] as $key => $value){
                $obj = new CustomVariable();
                $obj->deserialize($value);
                array_push($this->CustomVariableList, $obj);
            }
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
