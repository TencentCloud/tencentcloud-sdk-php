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
 * CreateUserMobileChangeUrl返回参数结构体
 *
 * @method string getUrl() 获取腾讯电子签小程序的实名认证链接。
如果没有传递，默认值是 HTTP。 链接的有效期均是 7 天。

- 如果EndPoint是APP，
得到的链接类似于pages/guide/index?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcExAlcOvNod0, 用法可以参考描述中的"跳转到小程序的实现"

- 如果EndPoint是HTTP，
得到的链接类似于https://res.ess.tencent.cn/cdn/h5-activity/jump-mp.html?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcChrfpaswT0d，点击后会跳转到腾讯电子签小程序进行签署

- 如果EndPoint是HTTP_SHORT_URL，
得到的链接类似于https://essurl.cn/2n**42Nd，点击后会跳转到腾讯电子签小程序进行签署


注： 生成的链路后面不能再增加参数
示例值：https://essurl.cn/2n**42Nd
 * @method void setUrl(string $Url) 设置腾讯电子签小程序的实名认证链接。
如果没有传递，默认值是 HTTP。 链接的有效期均是 7 天。

- 如果EndPoint是APP，
得到的链接类似于pages/guide/index?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcExAlcOvNod0, 用法可以参考描述中的"跳转到小程序的实现"

- 如果EndPoint是HTTP，
得到的链接类似于https://res.ess.tencent.cn/cdn/h5-activity/jump-mp.html?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcChrfpaswT0d，点击后会跳转到腾讯电子签小程序进行签署

- 如果EndPoint是HTTP_SHORT_URL，
得到的链接类似于https://essurl.cn/2n**42Nd，点击后会跳转到腾讯电子签小程序进行签署


注： 生成的链路后面不能再增加参数
示例值：https://essurl.cn/2n**42Nd
 * @method integer getExpireTime() 获取链接失效期限如下：

<ul>
<li>如果指定更换绑定手机号的用户(指定用户ID或姓名等信息)，则设定的链接失效期限为7天后。</li>
<li>如果没有指定更换绑定手机号的用户，则生成通用跳转到个人换手机号的界面，链接不会过期。</li>
</ul>
 * @method void setExpireTime(integer $ExpireTime) 设置链接失效期限如下：

<ul>
<li>如果指定更换绑定手机号的用户(指定用户ID或姓名等信息)，则设定的链接失效期限为7天后。</li>
<li>如果没有指定更换绑定手机号的用户，则生成通用跳转到个人换手机号的界面，链接不会过期。</li>
</ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateUserMobileChangeUrlResponse extends AbstractModel
{
    /**
     * @var string 腾讯电子签小程序的实名认证链接。
如果没有传递，默认值是 HTTP。 链接的有效期均是 7 天。

- 如果EndPoint是APP，
得到的链接类似于pages/guide/index?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcExAlcOvNod0, 用法可以参考描述中的"跳转到小程序的实现"

- 如果EndPoint是HTTP，
得到的链接类似于https://res.ess.tencent.cn/cdn/h5-activity/jump-mp.html?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcChrfpaswT0d，点击后会跳转到腾讯电子签小程序进行签署

- 如果EndPoint是HTTP_SHORT_URL，
得到的链接类似于https://essurl.cn/2n**42Nd，点击后会跳转到腾讯电子签小程序进行签署


注： 生成的链路后面不能再增加参数
示例值：https://essurl.cn/2n**42Nd
     */
    public $Url;

    /**
     * @var integer 链接失效期限如下：

<ul>
<li>如果指定更换绑定手机号的用户(指定用户ID或姓名等信息)，则设定的链接失效期限为7天后。</li>
<li>如果没有指定更换绑定手机号的用户，则生成通用跳转到个人换手机号的界面，链接不会过期。</li>
</ul>
     */
    public $ExpireTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Url 腾讯电子签小程序的实名认证链接。
如果没有传递，默认值是 HTTP。 链接的有效期均是 7 天。

- 如果EndPoint是APP，
得到的链接类似于pages/guide/index?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcExAlcOvNod0, 用法可以参考描述中的"跳转到小程序的实现"

- 如果EndPoint是HTTP，
得到的链接类似于https://res.ess.tencent.cn/cdn/h5-activity/jump-mp.html?to=MOBILE_CHANGE_INTENTION&shortKey=yDCZHUyOcChrfpaswT0d，点击后会跳转到腾讯电子签小程序进行签署

- 如果EndPoint是HTTP_SHORT_URL，
得到的链接类似于https://essurl.cn/2n**42Nd，点击后会跳转到腾讯电子签小程序进行签署


注： 生成的链路后面不能再增加参数
示例值：https://essurl.cn/2n**42Nd
     * @param integer $ExpireTime 链接失效期限如下：

<ul>
<li>如果指定更换绑定手机号的用户(指定用户ID或姓名等信息)，则设定的链接失效期限为7天后。</li>
<li>如果没有指定更换绑定手机号的用户，则生成通用跳转到个人换手机号的界面，链接不会过期。</li>
</ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
