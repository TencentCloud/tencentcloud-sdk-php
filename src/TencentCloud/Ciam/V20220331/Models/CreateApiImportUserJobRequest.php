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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApiImportUserJob请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method array getDataFlowUserCreateList() 获取导入的用户数据
 * @method void setDataFlowUserCreateList(array $DataFlowUserCreateList) 设置导入的用户数据
 */
class CreateApiImportUserJobRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var array 导入的用户数据
     */
    public $DataFlowUserCreateList;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param array $DataFlowUserCreateList 导入的用户数据
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("DataFlowUserCreateList",$param) and $param["DataFlowUserCreateList"] !== null) {
            $this->DataFlowUserCreateList = [];
            foreach ($param["DataFlowUserCreateList"] as $key => $value){
                $obj = new ImportUser();
                $obj->deserialize($value);
                array_push($this->DataFlowUserCreateList, $obj);
            }
        }
    }
}
