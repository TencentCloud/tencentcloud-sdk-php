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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签值引用的工作流详情
 *
 * @method string getAttributeLabelBizId() 获取标签值id
 * @method void setAttributeLabelBizId(string $AttributeLabelBizId) 设置标签值id
 * @method array getWorkflowList() 获取标签值引用的工作流列表
 * @method void setWorkflowList(array $WorkflowList) 设置标签值引用的工作流列表
 */
class AttributeLabelRefByWorkflow extends AbstractModel
{
    /**
     * @var string 标签值id
     */
    public $AttributeLabelBizId;

    /**
     * @var array 标签值引用的工作流列表
     */
    public $WorkflowList;

    /**
     * @param string $AttributeLabelBizId 标签值id
     * @param array $WorkflowList 标签值引用的工作流列表
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
        if (array_key_exists("AttributeLabelBizId",$param) and $param["AttributeLabelBizId"] !== null) {
            $this->AttributeLabelBizId = $param["AttributeLabelBizId"];
        }

        if (array_key_exists("WorkflowList",$param) and $param["WorkflowList"] !== null) {
            $this->WorkflowList = [];
            foreach ($param["WorkflowList"] as $key => $value){
                $obj = new WorkflowRef();
                $obj->deserialize($value);
                array_push($this->WorkflowList, $obj);
            }
        }
    }
}
