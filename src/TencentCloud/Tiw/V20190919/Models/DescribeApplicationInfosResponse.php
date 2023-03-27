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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationInfos返回参数结构体
 *
 * @method array getApplicationInfos() 获取应用列表
 * @method void setApplicationInfos(array $ApplicationInfos) 设置应用列表
 * @method integer getAllOption() 获取是否包含所有的应用，0-不包含，1-包含
 * @method void setAllOption(integer $AllOption) 设置是否包含所有的应用，0-不包含，1-包含
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApplicationInfosResponse extends AbstractModel
{
    /**
     * @var array 应用列表
     */
    public $ApplicationInfos;

    /**
     * @var integer 是否包含所有的应用，0-不包含，1-包含
     */
    public $AllOption;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ApplicationInfos 应用列表
     * @param integer $AllOption 是否包含所有的应用，0-不包含，1-包含
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ApplicationInfos",$param) and $param["ApplicationInfos"] !== null) {
            $this->ApplicationInfos = [];
            foreach ($param["ApplicationInfos"] as $key => $value){
                $obj = new ApplicationItem();
                $obj->deserialize($value);
                array_push($this->ApplicationInfos, $obj);
            }
        }

        if (array_key_exists("AllOption",$param) and $param["AllOption"] !== null) {
            $this->AllOption = $param["AllOption"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
