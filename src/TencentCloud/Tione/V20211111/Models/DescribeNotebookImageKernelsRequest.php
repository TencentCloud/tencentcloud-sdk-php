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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookImageKernels请求参数结构体
 *
 * @method string getNotebookId() 获取notebook id
 * @method void setNotebookId(string $NotebookId) 设置notebook id
 */
class DescribeNotebookImageKernelsRequest extends AbstractModel
{
    /**
     * @var string notebook id
     */
    public $NotebookId;

    /**
     * @param string $NotebookId notebook id
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
        if (array_key_exists("NotebookId",$param) and $param["NotebookId"] !== null) {
            $this->NotebookId = $param["NotebookId"];
        }
    }
}
