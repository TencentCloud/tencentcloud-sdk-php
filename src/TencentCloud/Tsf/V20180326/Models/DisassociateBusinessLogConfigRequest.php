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
 * DisassociateBusinessLogConfig请求参数结构体
 *
 * @method array getConfigIdList() 获取业务日志配置项ID列表
 * @method void setConfigIdList(array $ConfigIdList) 设置业务日志配置项ID列表
 * @method string getGroupId() 获取TSF分组ID
 * @method void setGroupId(string $GroupId) 设置TSF分组ID
 */
class DisassociateBusinessLogConfigRequest extends AbstractModel
{
    /**
     * @var array 业务日志配置项ID列表
     */
    public $ConfigIdList;

    /**
     * @var string TSF分组ID
     */
    public $GroupId;

    /**
     * @param array $ConfigIdList 业务日志配置项ID列表
     * @param string $GroupId TSF分组ID
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
        if (array_key_exists("ConfigIdList",$param) and $param["ConfigIdList"] !== null) {
            $this->ConfigIdList = $param["ConfigIdList"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
