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
 * CreateGroupWithSubGroup请求参数结构体
 *
 * @method string getGroupName() 获取待创建的新群组名
 * @method void setGroupName(string $GroupName) 设置待创建的新群组名
 * @method integer getSdkAppId() 获取低代码平台应用ID
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码平台应用ID
 * @method array getSubGroupIds() 获取子群组ID列表，子群组ID不能重复，最多40个
 * @method void setSubGroupIds(array $SubGroupIds) 设置子群组ID列表，子群组ID不能重复，最多40个
 * @method string getTeacherId() 获取群组默认主讲老师ID
 * @method void setTeacherId(string $TeacherId) 设置群组默认主讲老师ID
 */
class CreateGroupWithSubGroupRequest extends AbstractModel
{
    /**
     * @var string 待创建的新群组名
     */
    public $GroupName;

    /**
     * @var integer 低代码平台应用ID
     */
    public $SdkAppId;

    /**
     * @var array 子群组ID列表，子群组ID不能重复，最多40个
     */
    public $SubGroupIds;

    /**
     * @var string 群组默认主讲老师ID
     */
    public $TeacherId;

    /**
     * @param string $GroupName 待创建的新群组名
     * @param integer $SdkAppId 低代码平台应用ID
     * @param array $SubGroupIds 子群组ID列表，子群组ID不能重复，最多40个
     * @param string $TeacherId 群组默认主讲老师ID
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SubGroupIds",$param) and $param["SubGroupIds"] !== null) {
            $this->SubGroupIds = $param["SubGroupIds"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }
    }
}
