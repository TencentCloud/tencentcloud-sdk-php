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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转发规则动作
 *
 * @method integer getOrder() 获取转发动作执行顺序，不能重复，按从小到大顺序执行。取值范围：1 ~ 50000。
 * @method void setOrder(integer $Order) 设置转发动作执行顺序，不能重复，按从小到大顺序执行。取值范围：1 ~ 50000。
 * @method string getType() 获取转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
 * @method void setType(string $Type) 设置转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
 * @method FixedResponseInfo getFixedResponseConfig() 获取固定响应内容配置。
 * @method void setFixedResponseConfig(FixedResponseInfo $FixedResponseConfig) 设置固定响应内容配置。
 * @method InsertHTTPHeaderInfo getInsertHeaderConfig() 获取插入HTTP Header配置。
 * @method void setInsertHeaderConfig(InsertHTTPHeaderInfo $InsertHeaderConfig) 设置插入HTTP Header配置。
 * @method HTTPRedirectInfo getRedirectConfig() 获取重定向配置。除HttpCode外，其他配置不能都使用默认值。
 * @method void setRedirectConfig(HTTPRedirectInfo $RedirectConfig) 设置重定向配置。除HttpCode外，其他配置不能都使用默认值。
 * @method RemoveHTTPHeaderInfo getRemoveHeaderConfig() 获取删除HTTP Header配置。
 * @method void setRemoveHeaderConfig(RemoveHTTPHeaderInfo $RemoveHeaderConfig) 设置删除HTTP Header配置。
 * @method HTTPRewriteInfo getRewriteConfig() 获取重写配置。
 * @method void setRewriteConfig(HTTPRewriteInfo $RewriteConfig) 设置重写配置。
 * @method TargetGroupConfig getTargetGroupConfig() 获取转发目标组配置。
 * @method void setTargetGroupConfig(TargetGroupConfig $TargetGroupConfig) 设置转发目标组配置。
 */
class RuleAction extends AbstractModel
{
    /**
     * @var integer 转发动作执行顺序，不能重复，按从小到大顺序执行。取值范围：1 ~ 50000。
     */
    public $Order;

    /**
     * @var string 转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
     */
    public $Type;

    /**
     * @var FixedResponseInfo 固定响应内容配置。
     */
    public $FixedResponseConfig;

    /**
     * @var InsertHTTPHeaderInfo 插入HTTP Header配置。
     */
    public $InsertHeaderConfig;

    /**
     * @var HTTPRedirectInfo 重定向配置。除HttpCode外，其他配置不能都使用默认值。
     */
    public $RedirectConfig;

    /**
     * @var RemoveHTTPHeaderInfo 删除HTTP Header配置。
     */
    public $RemoveHeaderConfig;

    /**
     * @var HTTPRewriteInfo 重写配置。
     */
    public $RewriteConfig;

    /**
     * @var TargetGroupConfig 转发目标组配置。
     */
    public $TargetGroupConfig;

    /**
     * @param integer $Order 转发动作执行顺序，不能重复，按从小到大顺序执行。取值范围：1 ~ 50000。
     * @param string $Type 转发动作类型。取值：
TargetGroup：转发至目标组。
Redirect：重定向。
FixedResponse：返回固定内容。
Rewrite：重写。
InsertHeader：写入HTTP Header。
RemoveHeader：删除HTTP Header。
转发动作必选包含TargetGroup,Redirect,FixedResponse其中一个，并且执行顺序放在最后。
     * @param FixedResponseInfo $FixedResponseConfig 固定响应内容配置。
     * @param InsertHTTPHeaderInfo $InsertHeaderConfig 插入HTTP Header配置。
     * @param HTTPRedirectInfo $RedirectConfig 重定向配置。除HttpCode外，其他配置不能都使用默认值。
     * @param RemoveHTTPHeaderInfo $RemoveHeaderConfig 删除HTTP Header配置。
     * @param HTTPRewriteInfo $RewriteConfig 重写配置。
     * @param TargetGroupConfig $TargetGroupConfig 转发目标组配置。
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
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FixedResponseConfig",$param) and $param["FixedResponseConfig"] !== null) {
            $this->FixedResponseConfig = new FixedResponseInfo();
            $this->FixedResponseConfig->deserialize($param["FixedResponseConfig"]);
        }

        if (array_key_exists("InsertHeaderConfig",$param) and $param["InsertHeaderConfig"] !== null) {
            $this->InsertHeaderConfig = new InsertHTTPHeaderInfo();
            $this->InsertHeaderConfig->deserialize($param["InsertHeaderConfig"]);
        }

        if (array_key_exists("RedirectConfig",$param) and $param["RedirectConfig"] !== null) {
            $this->RedirectConfig = new HTTPRedirectInfo();
            $this->RedirectConfig->deserialize($param["RedirectConfig"]);
        }

        if (array_key_exists("RemoveHeaderConfig",$param) and $param["RemoveHeaderConfig"] !== null) {
            $this->RemoveHeaderConfig = new RemoveHTTPHeaderInfo();
            $this->RemoveHeaderConfig->deserialize($param["RemoveHeaderConfig"]);
        }

        if (array_key_exists("RewriteConfig",$param) and $param["RewriteConfig"] !== null) {
            $this->RewriteConfig = new HTTPRewriteInfo();
            $this->RewriteConfig->deserialize($param["RewriteConfig"]);
        }

        if (array_key_exists("TargetGroupConfig",$param) and $param["TargetGroupConfig"] !== null) {
            $this->TargetGroupConfig = new TargetGroupConfig();
            $this->TargetGroupConfig->deserialize($param["TargetGroupConfig"]);
        }
    }
}
