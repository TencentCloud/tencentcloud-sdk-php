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
 * DeleteApp请求参数结构体
 *
 * @method string getAppBizId() 获取应用ID
 * @method void setAppBizId(string $AppBizId) 设置应用ID
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
 */
class DeleteAppRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $AppBizId;

    /**
     * @var string 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
     */
    public $AppType;

    /**
     * @param string $AppBizId 应用ID
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }
    }
}
