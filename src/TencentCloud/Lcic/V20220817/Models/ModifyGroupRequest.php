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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyGroup请求参数结构体
 *
 * @method string getGroupId() 获取需要修改的群组ID
 * @method void setGroupId(string $GroupId) 设置需要修改的群组ID
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method string getTeacherId() 获取默认绑定主讲老师ID
 * @method void setTeacherId(string $TeacherId) 设置默认绑定主讲老师ID
 * @method string getGroupName() 获取待修改的群组名称
 * @method void setGroupName(string $GroupName) 设置待修改的群组名称
 */
class ModifyGroupRequest extends AbstractModel
{
    /**
     * @var string 需要修改的群组ID
     */
    public $GroupId;

    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var string 默认绑定主讲老师ID
     */
    public $TeacherId;

    /**
     * @var string 待修改的群组名称
     */
    public $GroupName;

    /**
     * @param string $GroupId 需要修改的群组ID
     * @param integer $SdkAppId 低代码平台应用ID
     * @param string $TeacherId 默认绑定主讲老师ID
     * @param string $GroupName 待修改的群组名称
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
