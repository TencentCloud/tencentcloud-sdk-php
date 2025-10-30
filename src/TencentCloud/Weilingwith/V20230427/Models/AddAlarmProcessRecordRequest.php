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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddAlarmProcessRecord请求参数结构体
 *
 * @method array getRecordSet() 获取处理记录项
 * @method void setRecordSet(array $RecordSet) 设置处理记录项
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getApplicationId() 获取非孪生平台外部应用appid
 * @method void setApplicationId(integer $ApplicationId) 设置非孪生平台外部应用appid
 * @method string getExtendOne() 获取此字段填写的是非孪生中台的用户id（多个用逗号分隔），如果是非孪生中台用户必填该字段

 * @method void setExtendOne(string $ExtendOne) 设置此字段填写的是非孪生中台的用户id（多个用逗号分隔），如果是非孪生中台用户必填该字段
 */
class AddAlarmProcessRecordRequest extends AbstractModel
{
    /**
     * @var array 处理记录项
     */
    public $RecordSet;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 非孪生平台外部应用appid
     */
    public $ApplicationId;

    /**
     * @var string 此字段填写的是非孪生中台的用户id（多个用逗号分隔），如果是非孪生中台用户必填该字段

     */
    public $ExtendOne;

    /**
     * @param array $RecordSet 处理记录项
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param integer $ApplicationId 非孪生平台外部应用appid
     * @param string $ExtendOne 此字段填写的是非孪生中台的用户id（多个用逗号分隔），如果是非孪生中台用户必填该字段
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
        if (array_key_exists("RecordSet",$param) and $param["RecordSet"] !== null) {
            $this->RecordSet = [];
            foreach ($param["RecordSet"] as $key => $value){
                $obj = new ProcessRecordInfo();
                $obj->deserialize($value);
                array_push($this->RecordSet, $obj);
            }
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ExtendOne",$param) and $param["ExtendOne"] !== null) {
            $this->ExtendOne = $param["ExtendOne"];
        }
    }
}
