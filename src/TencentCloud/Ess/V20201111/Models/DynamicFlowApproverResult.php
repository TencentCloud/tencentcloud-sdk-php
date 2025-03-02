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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态添加签署人的结果信息
 *
 * @method string getRecipientId() 获取签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

在进行新增签署方操作时，建议记录下该签署方的角色编号。后续可以拉取流程信息，用来判断该签署方的当前状态。

 * @method void setRecipientId(string $RecipientId) 设置签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

在进行新增签署方操作时，建议记录下该签署方的角色编号。后续可以拉取流程信息，用来判断该签署方的当前状态。

 * @method string getSignId() 获取签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
 * @method void setSignId(string $SignId) 设置签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
 * @method integer getApproverStatus() 获取签署方当前状态，会出现下面的状态

2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
8：待填写
9：因为各种原因（签署人改名等）而终止
10：填写完成
15：已解除
19：转他人处理
 * @method void setApproverStatus(integer $ApproverStatus) 设置签署方当前状态，会出现下面的状态

2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
8：待填写
9：因为各种原因（签署人改名等）而终止
10：填写完成
15：已解除
19：转他人处理
 */
class DynamicFlowApproverResult extends AbstractModel
{
    /**
     * @var string 签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

在进行新增签署方操作时，建议记录下该签署方的角色编号。后续可以拉取流程信息，用来判断该签署方的当前状态。

     */
    public $RecipientId;

    /**
     * @var string 签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
     */
    public $SignId;

    /**
     * @var integer 签署方当前状态，会出现下面的状态

2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
8：待填写
9：因为各种原因（签署人改名等）而终止
10：填写完成
15：已解除
19：转他人处理
     */
    public $ApproverStatus;

    /**
     * @param string $RecipientId 签署方角色编号，签署方角色编号是用于区分同一个流程中不同签署方的唯一标识。不同的流程会出现同样的签署方角色编号。

填写控件和签署控件都与特定的角色编号关联。

在进行新增签署方操作时，建议记录下该签署方的角色编号。后续可以拉取流程信息，用来判断该签署方的当前状态。

     * @param string $SignId 签署方唯一编号，一个全局唯一的标识符，不同的流程不会出现冲突。

可以使用签署方的唯一编号来生成签署链接（也可以通过RecipientId来生成签署链接）。
     * @param integer $ApproverStatus 签署方当前状态，会出现下面的状态

2：待签署
3：已签署
4：已拒绝
5：已过期
6：已撤销
8：待填写
9：因为各种原因（签署人改名等）而终止
10：填写完成
15：已解除
19：转他人处理
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverStatus",$param) and $param["ApproverStatus"] !== null) {
            $this->ApproverStatus = $param["ApproverStatus"];
        }
    }
}
