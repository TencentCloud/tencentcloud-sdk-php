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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAdministrationByTag请求参数结构体
 *
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间ID
 * @method string getTag() 获取标签值
 * @method void setTag(string $Tag) 设置标签值
 */
class DescribeAdministrationByTagRequest extends AbstractModel
{
    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var string 标签值
     */
    public $Tag;

    /**
     * @param string $ApplicationToken 应用token
     * @param integer $WorkspaceId 工作空间ID
     * @param string $Tag 标签值
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
        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
