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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateBusinessLogConfig请求参数结构体
 *
 * @method string getGroupId() 获取TSF分组ID
 * @method void setGroupId(string $GroupId) 设置TSF分组ID
 * @method array getConfigIdList() 获取日志配置项ID列表
 * @method void setConfigIdList(array $ConfigIdList) 设置日志配置项ID列表
 */
class AssociateBusinessLogConfigRequest extends AbstractModel
{
    /**
     * @var string TSF分组ID
     */
    public $GroupId;

    /**
     * @var array 日志配置项ID列表
     */
    public $ConfigIdList;

    /**
     * @param string $GroupId TSF分组ID
     * @param array $ConfigIdList 日志配置项ID列表
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

        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }
    }
}
