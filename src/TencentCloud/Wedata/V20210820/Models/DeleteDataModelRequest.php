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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDataModel请求参数结构体
 *
 * @method string getCloudappId() 获取云应用的实例id
 * @method void setCloudappId(string $CloudappId) 设置云应用的实例id
 * @method string getDataModelId() 获取数据建模的实例id
 * @method void setDataModelId(string $DataModelId) 设置数据建模的实例id
 * @method string getUserId() 获取用户的子账号id
 * @method void setUserId(string $UserId) 设置用户的子账号id
 */
class DeleteDataModelRequest extends AbstractModel
{
    /**
     * @var string 云应用的实例id
     */
    public $CloudappId;

    /**
     * @var string 数据建模的实例id
     */
    public $DataModelId;

    /**
     * @var string 用户的子账号id
     */
    public $UserId;

    /**
     * @param string $CloudappId 云应用的实例id
     * @param string $DataModelId 数据建模的实例id
     * @param string $UserId 用户的子账号id
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
        if (array_key_exists("CloudappId",$param) and $param["CloudappId"] !== null) {
            $this->CloudappId = $param["CloudappId"];
        }

        if (array_key_exists("DataModelId",$param) and $param["DataModelId"] !== null) {
            $this->DataModelId = $param["DataModelId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
