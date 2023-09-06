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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcb环境实例详情 - 异步关联云资源数据结构
 *
 * @method TCBEnvironment getEnvironment() 获取tcb环境	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvironment(TCBEnvironment $Environment) 设置tcb环境	
注意：此字段可能返回 null，表示取不到有效值。
 * @method TCBAccessService getAccessService() 获取访问服务	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessService(TCBAccessService $AccessService) 设置访问服务	
注意：此字段可能返回 null，表示取不到有效值。
 * @method TCBHostService getHostService() 获取静态托管	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostService(TCBHostService $HostService) 设置静态托管	
注意：此字段可能返回 null，表示取不到有效值。
 */
class TCBEnvironments extends AbstractModel
{
    /**
     * @var TCBEnvironment tcb环境	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Environment;

    /**
     * @var TCBAccessService 访问服务	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessService;

    /**
     * @var TCBHostService 静态托管	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostService;

    /**
     * @param TCBEnvironment $Environment tcb环境	
注意：此字段可能返回 null，表示取不到有效值。
     * @param TCBAccessService $AccessService 访问服务	
注意：此字段可能返回 null，表示取不到有效值。
     * @param TCBHostService $HostService 静态托管	
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = new TCBEnvironment();
            $this->Environment->deserialize($param["Environment"]);
        }

        if (array_key_exists("AccessService",$param) and $param["AccessService"] !== null) {
            $this->AccessService = new TCBAccessService();
            $this->AccessService->deserialize($param["AccessService"]);
        }

        if (array_key_exists("HostService",$param) and $param["HostService"] !== null) {
            $this->HostService = new TCBHostService();
            $this->HostService->deserialize($param["HostService"]);
        }
    }
}
