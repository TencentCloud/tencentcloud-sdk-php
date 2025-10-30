<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * 小程序发起合同可选项
 *
 * @method integer getRemindedOn() 获取到期提醒日（linux时间戳） 精确到天
 * @method void setRemindedOn(integer $RemindedOn) 设置到期提醒日（linux时间戳） 精确到天
 * @method boolean getNeedCreateReview() 获取是否需要发起前进行审批
 * @method void setNeedCreateReview(boolean $NeedCreateReview) 设置是否需要发起前进行审批
 * @method integer getFlowDisplayType() 获取在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
 * @method boolean getForbidEditFlow() 获取小程序集成发起，是否禁止发起时修改合同内容
<ul>
<li>false：默认值，不禁止发起时修改合同内容</li>
<li>true：禁止发起时修改合同内容（将直接跳过添加/编辑签署人步骤，直接到核对合同信息页面</li>
</ul>
指定为true，效果如下：

效果如下:![ForbidEditFlow](https://qcloudimg.tencent-cloud.cn/raw/2440eca624f2f6730fecbf69daad0533.jpg)

 * @method void setForbidEditFlow(boolean $ForbidEditFlow) 设置小程序集成发起，是否禁止发起时修改合同内容
<ul>
<li>false：默认值，不禁止发起时修改合同内容</li>
<li>true：禁止发起时修改合同内容（将直接跳过添加/编辑签署人步骤，直接到核对合同信息页面</li>
</ul>
指定为true，效果如下：

效果如下:![ForbidEditFlow](https://qcloudimg.tencent-cloud.cn/raw/2440eca624f2f6730fecbf69daad0533.jpg)
 */
class MiniAppCreateFlowOption extends AbstractModel
{
    /**
     * @var integer 到期提醒日（linux时间戳） 精确到天
     */
    public $RemindedOn;

    /**
     * @var boolean 是否需要发起前进行审批
     */
    public $NeedCreateReview;

    /**
     * @var integer 在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
     */
    public $FlowDisplayType;

    /**
     * @var boolean 小程序集成发起，是否禁止发起时修改合同内容
<ul>
<li>false：默认值，不禁止发起时修改合同内容</li>
<li>true：禁止发起时修改合同内容（将直接跳过添加/编辑签署人步骤，直接到核对合同信息页面</li>
</ul>
指定为true，效果如下：

效果如下:![ForbidEditFlow](https://qcloudimg.tencent-cloud.cn/raw/2440eca624f2f6730fecbf69daad0533.jpg)

     */
    public $ForbidEditFlow;

    /**
     * @param integer $RemindedOn 到期提醒日（linux时间戳） 精确到天
     * @param boolean $NeedCreateReview 是否需要发起前进行审批
     * @param integer $FlowDisplayType 在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
     * @param boolean $ForbidEditFlow 小程序集成发起，是否禁止发起时修改合同内容
<ul>
<li>false：默认值，不禁止发起时修改合同内容</li>
<li>true：禁止发起时修改合同内容（将直接跳过添加/编辑签署人步骤，直接到核对合同信息页面</li>
</ul>
指定为true，效果如下：

效果如下:![ForbidEditFlow](https://qcloudimg.tencent-cloud.cn/raw/2440eca624f2f6730fecbf69daad0533.jpg)
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
        if (array_key_exists("RemindedOn",$param) and $param["RemindedOn"] !== null) {
            $this->RemindedOn = $param["RemindedOn"];
        }

        if (array_key_exists("NeedCreateReview",$param) and $param["NeedCreateReview"] !== null) {
            $this->NeedCreateReview = $param["NeedCreateReview"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("ForbidEditFlow",$param) and $param["ForbidEditFlow"] !== null) {
            $this->ForbidEditFlow = $param["ForbidEditFlow"];
        }
    }
}
