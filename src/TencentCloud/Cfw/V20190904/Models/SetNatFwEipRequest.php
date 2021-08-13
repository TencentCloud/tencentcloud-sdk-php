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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetNatFwEip请求参数结构体
 *
 * @method string getOperationType() 获取bind：绑定eip；unbind：解绑eip；newAdd：新增防火墙弹性公网ip
 * @method void setOperationType(string $OperationType) 设置bind：绑定eip；unbind：解绑eip；newAdd：新增防火墙弹性公网ip
 * @method string getCfwInstance() 获取防火墙实例id
 * @method void setCfwInstance(string $CfwInstance) 设置防火墙实例id
 * @method array getEipList() 获取当OperationType 为bind或unbind操作时，使用该字段。
 * @method void setEipList(array $EipList) 设置当OperationType 为bind或unbind操作时，使用该字段。
 */
class SetNatFwEipRequest extends AbstractModel
{
    /**
     * @var string bind：绑定eip；unbind：解绑eip；newAdd：新增防火墙弹性公网ip
     */
    public $OperationType;

    /**
     * @var string 防火墙实例id
     */
    public $CfwInstance;

    /**
     * @var array 当OperationType 为bind或unbind操作时，使用该字段。
     */
    public $EipList;

    /**
     * @param string $OperationType bind：绑定eip；unbind：解绑eip；newAdd：新增防火墙弹性公网ip
     * @param string $CfwInstance 防火墙实例id
     * @param array $EipList 当OperationType 为bind或unbind操作时，使用该字段。
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("CfwInstance",$param) and $param["CfwInstance"] !== null) {
            $this->CfwInstance = $param["CfwInstance"];
        }

        if (array_key_exists("EipList",$param) and $param["EipList"] !== null) {
            $this->EipList = $param["EipList"];
        }
    }
}
