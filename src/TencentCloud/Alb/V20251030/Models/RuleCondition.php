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
 * 转发规则条件
 *
 * @method string getType() 获取转发条件类型。取值：
Host：主机。
Path：路径。
Header：HTTP Header字段。
QueryString：HTPP查询字符串。
Method：请求方法。
Cookie：Cookie。
SourceIp：源 IP。
 * @method void setType(string $Type) 设置转发条件类型。取值：
Host：主机。
Path：路径。
Header：HTTP Header字段。
QueryString：HTPP查询字符串。
Method：请求方法。
Cookie：Cookie。
SourceIp：源 IP。
 * @method array getCookieConfig() 获取Cookie配置。
 * @method void setCookieConfig(array $CookieConfig) 设置Cookie配置。
 * @method HTTPHeaderInfo getHeaderConfig() 获取HTTP Header配置。
 * @method void setHeaderConfig(HTTPHeaderInfo $HeaderConfig) 设置HTTP Header配置。
 * @method array getHostConfig() 获取主机名。主机配置在一个规则中只能出现一次，长度3 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
不能以半角句号（.）、下划线（_）开头或结尾。
精确匹配，支持的字符集为：a-z 0-9 . - _ 。
正则匹配，波浪线（~）开头为正则匹配，支持的字符集为：a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] 。
通配匹配，星号（*）多字符通配，半角问号（?）单字符通配，支持的字符集为：a-z 0-9 . - _ * ?。
 * @method void setHostConfig(array $HostConfig) 设置主机名。主机配置在一个规则中只能出现一次，长度3 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
不能以半角句号（.）、下划线（_）开头或结尾。
精确匹配，支持的字符集为：a-z 0-9 . - _ 。
正则匹配，波浪线（~）开头为正则匹配，支持的字符集为：a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] 。
通配匹配，星号（*）多字符通配，半角问号（?）单字符通配，支持的字符集为：a-z 0-9 . - _ * ?。
 * @method array getMethodConfig() 获取请求方法。取值：HEAD、GET、POST、OPTIONS、PUT、PATCH、DELETE。
 * @method void setMethodConfig(array $MethodConfig) 设置请求方法。取值：HEAD、GET、POST、OPTIONS、PUT、PATCH、DELETE。
 * @method array getPathConfig() 获取转发路径。长度1 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
精确匹配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
正则匹配，需以 ~ 开头，~ 开头表示区分大小写， ~* 开头表示不区分大小写，支持的字符集为： a-z A-Z 0-9 . - _ / = ?  ~ ^ * $ : ( ) [ ] + |。
通配匹配，* 表示多字符通配，? 表示单字符通配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
 * @method void setPathConfig(array $PathConfig) 设置转发路径。长度1 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
精确匹配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
正则匹配，需以 ~ 开头，~ 开头表示区分大小写， ~* 开头表示不区分大小写，支持的字符集为： a-z A-Z 0-9 . - _ / = ?  ~ ^ * $ : ( ) [ ] + |。
通配匹配，* 表示多字符通配，? 表示单字符通配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
 * @method array getQueryStringConfig() 获取查询字符串配置。
 * @method void setQueryStringConfig(array $QueryStringConfig) 设置查询字符串配置。
 * @method array getSourceIpConfig() 获取源IP匹配配置。CIDR格式，IP地址x.x.x.x/32，IP网段x.x.x.x/24。
 * @method void setSourceIpConfig(array $SourceIpConfig) 设置源IP匹配配置。CIDR格式，IP地址x.x.x.x/32，IP网段x.x.x.x/24。
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string 转发条件类型。取值：
Host：主机。
Path：路径。
Header：HTTP Header字段。
QueryString：HTPP查询字符串。
Method：请求方法。
Cookie：Cookie。
SourceIp：源 IP。
     */
    public $Type;

    /**
     * @var array Cookie配置。
     */
    public $CookieConfig;

    /**
     * @var HTTPHeaderInfo HTTP Header配置。
     */
    public $HeaderConfig;

    /**
     * @var array 主机名。主机配置在一个规则中只能出现一次，长度3 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
不能以半角句号（.）、下划线（_）开头或结尾。
精确匹配，支持的字符集为：a-z 0-9 . - _ 。
正则匹配，波浪线（~）开头为正则匹配，支持的字符集为：a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] 。
通配匹配，星号（*）多字符通配，半角问号（?）单字符通配，支持的字符集为：a-z 0-9 . - _ * ?。
     */
    public $HostConfig;

    /**
     * @var array 请求方法。取值：HEAD、GET、POST、OPTIONS、PUT、PATCH、DELETE。
     */
    public $MethodConfig;

    /**
     * @var array 转发路径。长度1 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
精确匹配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
正则匹配，需以 ~ 开头，~ 开头表示区分大小写， ~* 开头表示不区分大小写，支持的字符集为： a-z A-Z 0-9 . - _ / = ?  ~ ^ * $ : ( ) [ ] + |。
通配匹配，* 表示多字符通配，? 表示单字符通配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
     */
    public $PathConfig;

    /**
     * @var array 查询字符串配置。
     */
    public $QueryStringConfig;

    /**
     * @var array 源IP匹配配置。CIDR格式，IP地址x.x.x.x/32，IP网段x.x.x.x/24。
     */
    public $SourceIpConfig;

    /**
     * @param string $Type 转发条件类型。取值：
Host：主机。
Path：路径。
Header：HTTP Header字段。
QueryString：HTPP查询字符串。
Method：请求方法。
Cookie：Cookie。
SourceIp：源 IP。
     * @param array $CookieConfig Cookie配置。
     * @param HTTPHeaderInfo $HeaderConfig HTTP Header配置。
     * @param array $HostConfig 主机名。主机配置在一个规则中只能出现一次，长度3 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
不能以半角句号（.）、下划线（_）开头或结尾。
精确匹配，支持的字符集为：a-z 0-9 . - _ 。
正则匹配，波浪线（~）开头为正则匹配，支持的字符集为：a-z 0-9 . - ? = ~ _ - + \ ^ * ! $ & | ( ) [ ] 。
通配匹配，星号（*）多字符通配，半角问号（?）单字符通配，支持的字符集为：a-z 0-9 . - _ * ?。
     * @param array $MethodConfig 请求方法。取值：HEAD、GET、POST、OPTIONS、PUT、PATCH、DELETE。
     * @param array $PathConfig 转发路径。长度1 ~ 128个字符，支持精确匹配，正则匹配，通配匹配。
精确匹配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
正则匹配，需以 ~ 开头，~ 开头表示区分大小写， ~* 开头表示不区分大小写，支持的字符集为： a-z A-Z 0-9 . - _ / = ?  ~ ^ * $ : ( ) [ ] + |。
通配匹配，* 表示多字符通配，? 表示单字符通配，支持的字符集为：a-z A-Z 0-9 . - _ / =  :。
     * @param array $QueryStringConfig 查询字符串配置。
     * @param array $SourceIpConfig 源IP匹配配置。CIDR格式，IP地址x.x.x.x/32，IP网段x.x.x.x/24。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CookieConfig",$param) and $param["CookieConfig"] !== null) {
            $this->CookieConfig = [];
            foreach ($param["CookieConfig"] as $key => $value){
                $obj = new HTTPCookieInfo();
                $obj->deserialize($value);
                array_push($this->CookieConfig, $obj);
            }
        }

        if (array_key_exists("HeaderConfig",$param) and $param["HeaderConfig"] !== null) {
            $this->HeaderConfig = new HTTPHeaderInfo();
            $this->HeaderConfig->deserialize($param["HeaderConfig"]);
        }

        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = $param["HostConfig"];
        }

        if (array_key_exists("MethodConfig",$param) and $param["MethodConfig"] !== null) {
            $this->MethodConfig = $param["MethodConfig"];
        }

        if (array_key_exists("PathConfig",$param) and $param["PathConfig"] !== null) {
            $this->PathConfig = $param["PathConfig"];
        }

        if (array_key_exists("QueryStringConfig",$param) and $param["QueryStringConfig"] !== null) {
            $this->QueryStringConfig = [];
            foreach ($param["QueryStringConfig"] as $key => $value){
                $obj = new HTTPQueryStringInfo();
                $obj->deserialize($value);
                array_push($this->QueryStringConfig, $obj);
            }
        }

        if (array_key_exists("SourceIpConfig",$param) and $param["SourceIpConfig"] !== null) {
            $this->SourceIpConfig = $param["SourceIpConfig"];
        }
    }
}
