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
 * BatchReportAppMessage请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间Id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间Id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getReportSet() 获取消息上报请求列表
 * @method void setReportSet(array $ReportSet) 设置消息上报请求列表
 */
class BatchReportAppMessageRequest extends AbstractModel
{
    /**
     * @var integer 工作空间Id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 消息上报请求列表
     */
    public $ReportSet;

    /**
     * @param integer $WorkspaceId 工作空间Id
     * @param string $ApplicationToken 应用token
     * @param array $ReportSet 消息上报请求列表
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ReportSet",$param) and $param["ReportSet"] !== null) {
            $this->ReportSet = [];
            foreach ($param["ReportSet"] as $key => $value){
                $obj = new ReportAppMessage();
                $obj->deserialize($value);
                array_push($this->ReportSet, $obj);
            }
        }
    }
}
